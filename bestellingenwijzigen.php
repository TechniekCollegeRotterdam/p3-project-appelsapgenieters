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
        session_start();
            include "navadmin.php";

            if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
}
            ?>
            <br>
            <br>
 

<?php
        // Hier worden de gegevens van de landentabel opgehaald voor het formulier
    require_once ("dbconnect.php"); 
    $query = $db->prepare("SELECT * FROM purchase");
    $query->execute();
//        var_dump($query);
    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    foreach($resultq as $data){
        echo "<a href='bestellingenwijzigen.php?id=".$data['idpurchase']."'>";
        echo $data["purchasedate"] . " " . $data["paidinfulldate"];
        echo "</a>";
        echo "<br>";     
    }
		?>
        
	</header>

    <br>
    <br>
    <br>
    <!-- This is for the registerfield in html -->
    <h1>Wijzigen hier de bestelling</h1>
    <form method="POST" action="bestellingenprocesW.php">
<fieldset>
    <label for="idpurchase">idpurchase*</label><br><br>
    <input type="text" name="idpurchase" disabled>
  
    <br><br>

    
        <label for="purchasedate">purchasedate*</label><br><br>
        <input type="date" name="purchasedate"></input>
        <br><br>

        <label for="paidinfulldate">paidinfulldate*</label><br><br>
        <input type="date" name="paidinfulldate"></input>
        <br><br>

        <label for="deliverydate">deliverydate*</label><br><br>
        <input type="date" name="deliverydate"></input>
        <br><br>

        <label for="clientid">clientid*</label><br><br>
    <input type="text" name="clientid" disabled>
  
    <br><br>

        <fieldset>
        <input type="submit" class="submit" name="wijzigen" value="Wijzigen"></input>
        </fieldset>
    </form>

    
</body>
</html>