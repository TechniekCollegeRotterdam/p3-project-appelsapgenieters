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
    $query = $db->prepare("SELECT * FROM purchase WHERE idpurchase = :purid");
    $query->bindValue(':purid', $_POST["idpurchase"]);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    if($query->rowCount() == 1){
            echo "<table hidden>";
            echo "<thead>";
            echo "<th>id bestelling</th><th>Besteldatum</th><th>Totale bedrag</th><th>Bedrag datum</th><th>Besteldatum</th><th>Klant ID</th>";
            echo "</thead><tbody>";
    //        foreach($resultq as $data) {
                echo "<form action='bestellingenprocesV.php' method='POST'>";
                echo "<tr>";
                echo "<td>";
               echo "" . $data['idpurchase']."<input type='hidden' name='idpurchase' value ='".$data['idpurchase']."'></td>";
                echo "<td>";
                echo "" . $data['purchasedate']."<input type='hidden' name='purchasedate' value ='".$data["purchasedate"]."'></td>";
                echo "</td>";
                echo "<td>";
                echo "<p>€" . $data['paidamount']."<input type='hidden' name='paidamount' value ='".$data["paidamount"]."'></td>";
                echo "</p>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['paidinfulldate']."<input type='hidden' name='paidinfulldate' value ='".$data["paidinfulldate"]."'></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['deliverydate']."<input type='hidden' name='deliverydate' value ='".$data["deliverydate"]."'></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['clientid']."<input type='hidden' name='clientid' value ='".$data["clientid"]."'></td>";
                echo "</td>";
                echo "</form>";
                echo "</tr>";

                echo "</tbody></table>";
    }
    ?>
    	</header>

    <!-- This is for the registerfield in html -->
    <h1>Wijzigen hier de bestelling</h1>
    <form method="POST" action="bestellingenprocesW.php">
<fieldset>
    <label for="idpurchase">idpurchase*</label><br><br>
    <input type="text" name="idpurchase"  placeholder="<?php echo $data['idpurchase'] ?>" readonly>
  
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