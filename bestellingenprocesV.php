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
            if(isset($_SESSION["bh-login"])) {
                      require_once ("dbconnect.php"); 
            $query = $db->prepare("DELETE FROM purchase WHERE idpurchase = :cidpurchase");
            $query2 = $db->prepare("DELETE FROM purchaseline WHERE purchaseid = :cidpurchase");
            $query->bindValue(':cidpurchase', $_POST["idpurchase"]);
            $query2->bindValue(':cidpurchase', $_POST["purchaseid"]);
            $query->execute();
            $query2->execute();
            $result = ($db);
            $result2 = ($db);
            $result=$query->fetch(PDO::FETCH_ASSOC);
            $result2=$query2->fetch(PDO::FETCH_ASSOC);
            echo "<div class='container'>";
            echo "<div class='panel panel-primary'>";
            echo "<div class='panel-heading'>Verwijderen is succesvol</div>";
            echo "<div class='panel-body'>U gaat over 3 seconden naar de bestel pagina.</div>";
            echo "</div>";
            echo "</div>";
            header('Refresh: 3; url=bestellingenadmin.php');
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