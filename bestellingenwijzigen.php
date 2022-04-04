<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestelling wijzigen</title>
    <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
        <?php
            include "navadmin.php";

        require_once "dbconnect.php";
        // Hier worden de gegevens van de landentabel opgehaald voor het formulier
        $query = $db->prepare("SELECT * FROM country");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);

		?>
        
	</header>

    <br>
    <br>
    <br>
    <!-- This is for the registerfield in html -->
    <h1>Wijzigen hier de bestelling</h1>
    <form method="POST" action="bestellingprocesW.php">
<fieldset>
    <label for="givenname">idpurchase*</label><br><br>
    <input type="text" name="idpurchase" required autofocus>
  
    <br><br>

        <label for="birthday">purchasedate*</label><br><br>
        <input type="date" name="birthday"></input>
        <br><br>

        <label for="birthday">paidinfulldate*</label><br><br>
        <input type="date" name="birthday"></input>
        <br><br>

        <label for="birthday">deliverydate*</label><br><br>
        <input type="date" name="birthday"></input>
        <br><br>

        <label for="givenname">clientid*</label><br><br>
    <input type="text" name="idpurchase" required autofocus>
  
    <br><br>

        <fieldset>
        <input type="submit" class="submit" name="wijzigen" value="registreren"></input>
        </fieldset>
    </form>

    
</body>
</html>