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
		<h1>Company</h1>
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
        // Verbinding maken met de database
        if(isset($_POST["Verwijderen"]))
        {
            require_once ("dbconnect.php"); 
            $query = $db->prepare("DELETE FROM purchase WHERE idpurchase = '%%';");
            $query->execute();

            echo "<div class='container'>";
            echo "<div class='panel panel-primary'>";
            echo "<div class='panel-heading'>Verwijderen is succesvol</div>";
            echo "<div class='panel-body'>U gaat over 3 seconden naar de startpagina</div>";
            echo "</div>";
            echo "</div>";
            header('Refresh: 3; url=bestellingenadmin.php');

            else{
                
            }
        }
    ?>
    </main>
</body>
</html>