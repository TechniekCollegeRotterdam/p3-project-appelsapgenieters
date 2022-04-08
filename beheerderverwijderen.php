<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Alle beheerders</title>
</head>
<body>
    <header>
		<h1>Beheerder verwijderen</h1>
	    <!-- hieronder wordt het menu opgehaald. -->
        <?php
        session_start();
        if(isset($_SESSION["bh-login"]))
        {
            include "navadmin.php";
        } elseif(isset($_SESSION["cl-login"]))
        {
            include "navclient.php";
        } else
			include "navbezoeker.html";
		?>
	</header>

    <?php
    if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
} ?>
    <main>

    <?php

   /* This is checking if the user has clicked the delete button. */
        if(isset($_POST["verwijderen"]))
        {               
            require_once ("dbconnect.php"); 
            $query = $db->prepare("DELETE FROM client WHERE admn LIKE '%J%'");
            $query->execute();
            $result = ($db);
            $result=$query->fetch(PDO::FETCH_ASSOC);
            echo "<div class='container'>";
            echo "<div class='panel panel-primary'>";
            echo "<div class='panel-heading'>De door u gekozen beheerder is met succes verwijderd</div>";
            echo "<div class='panel-body'>U gaat over 3 seconden naar de homepagina.</div>";
            echo "</div>";
            echo "</div>";
            header('Refresh: 3; url=index.php');
         }


        else{
            echo "<div class='container'>";
            echo "<div class='panel panel-primary'>";
            echo "<div class='panel-heading'>Helaas</div>";
            echo "<div class='panel-body'>De verwijdering is mislukt. probeer het nog eens.</div>";
            echo "</div>";
            echo "</div>";
            header('Refresh: 3; url=allebeheerders.php');   
        }
    ?>
    </main>
</body>
</html>