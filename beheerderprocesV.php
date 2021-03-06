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

            if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
            {
                header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
            exit();
            }

		?>
	</header>

    <main>

    <?php
   /* This is checking if the user has clicked the delete button. */
        if(isset($_POST["Ja"]))
        {               
            //check of the admin is login
            if(isset($_SESSION["bh-login"])) {
            require_once ("dbconnect.php"); 
            $query1 = $db->prepare("SELECT * FROM client WHERE idclient = :cidclient");
            $query1->bindValue(':cidclient', $_POST["idclient"]);
            $query1->execute();
            $result1 = ($db);
            $result1=$query1->fetchAll(PDO::FETCH_ASSOC);

                //check if the query is not equal to one
            if($query1->rowCount() <> 1){
                echo "<div class='container'>";
                echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>Verwijderen mislukt</div>";
                echo "<div class='panel-body'>U kunt de laatste beheerder niet verwijderen!.</div>";
                echo "</div>";
                echo "</div>";
                header('Refresh: 3; url=beheerderadmin.php'); 
           } else{
                    $query2 = $db->prepare("DELETE FROM client WHERE idclient = :cidclient");
                    $query2->bindValue(':cidclient', $_POST["idclient"]);
                    $query2->execute();
                    $query2->execute();
                    $result2 = ($db);
                    $result2=$query2->fetch(PDO::FETCH_ASSOC);
                echo "<div class='container'>";
                echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>Verwijderen is succesvol</div>";
                echo "<div class='panel-body'>U gaat over 3 seconden naar de bestel pagina.</div>";
                echo "</div>";
                echo "</div>";
                header('Refresh: 3; url=beheerderadmin.php');
                }
            }
            else{
                echo "<div class='container'>";
                echo "<div class='panel panel-primary'>";
                echo "<div class='panel-heading'>Helaas</div>";
                echo "<div class='panel-body'>Verwijderen mislukt. U bent geen beheerder!</div>";
                echo "</div>";
                echo "</div>";
                header('Refresh: 3; url=index.php');   
            }
        }

        else{
            echo "<div class='container'>";
            echo "<div class='panel panel-primary'>";
            echo "<div class='panel-heading'>Helaas</div>";
            echo "<div class='panel-body'>Verwijderen mislukt. Bestelling niet verwijderd!</div>";
            echo "</div>";
            echo "</div>";
            header('Refresh: 3; url=index.php');   
        }
    ?>
    </main>
</body>
</html>