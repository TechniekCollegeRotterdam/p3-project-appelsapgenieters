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
    require_once ("dbconnect.php"); 
    $query = $db->prepare("SELECT * FROM purchase WHERE idpurchase = :purid");
    $query->bindValue(':purid', $_POST["idpurchase"]);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    ?>
    	</header>

    <!-- This is for the registerfield in html -->
    <h1>Wijzigen hier de bestelling</h1>
    <form method="POST" action="bestellingenprocesW.php">
    <fieldset>
    <label for="idpurchase">idpurchase*</label><br><br>
    <input type="text" name="idpurchase"  value="<?php echo $data['idpurchase'] ?>" readonly>
    </fieldset>
    <br><br>

    
        <label for="purchasedate">purchasedate*</label><br><br>
        <?php echo "<input type='date' name='purchasedate'  value='".$data['purchasedate']."' required>"; ?>
        <br><br>

        <label for="paidamount">paidamount*</label><br><br>
        <input readonly type="text" name="paidamount"  placeholder="€<?php echo $data['paidamount'] ?>">
        <br><br>

        <label for="paidinfulldate">paidinfulldate*</label><br><br>
        <?php echo "<input type='date' name='paidinfulldate'  value='".$data['paidinfulldate']."' required>"; ?>
        <br><br>

        <label for="deliverydate">deliverydate*</label><br><br>
        <?php echo "<input type='date' name='deliverydate'  value='".$data['deliverydate']."' required>"; ?>
        <br><br>

        <label for="clientid">clientid*</label><br><br>
    <input readonly type="text" name="clientid"  placeholder="<?php echo $data['clientid'] ?>">
 
  
    <br><br>

        <fieldset>
        <input type="submit" class="submit" name="wijzigen" value="Wijzigen"></input>
        </fieldset>
    </form>

    
</body>
</html>