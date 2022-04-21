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
    $query = $db->prepare("SELECT * FROM product    
    INNER JOIN type ON idtype = typeid
    WHERE idproduct = :proid");
    $query->bindValue(':proid', $_POST["idproduct"]);
    $query->execute();
    $data = $query->fetch(PDO::FETCH_ASSOC);
    
    ?>
    	</header>

    <!-- This is for the registerfield in html -->
    <h1>Wijzigen hier de bestelling</h1>
    <form method="POST" action="prodprocesW.php">
    <fieldset>

    <label for="idproduct">product id</label><br><br>
        <input readonly type="text" name="idproduct"  placeholder="<?php echo $data['idproduct'] ?>">
        <br><br>
    
        <label for="typeid">Type id</label><br><br>
        <?php 
        foreach($result as $rij)
        echo "<option type='text' name='typeid'  
        value='".$data['typeid']."' required>"
        echo "</option>";
        ?>
        <br><br>

        <label for="stockquantity">Voorraad</label><br><br>
        <?php echo "<input type='text' name='stockquantity'  value='".$data['stockquantity']."' required>"; ?>
        <br><br>

        <label for="price">Prijs</label><br><br>
        <?php echo "<input type='text' name='price'  value='".$data['price']."' required>"; ?>
        <br><br>

        <label for="imageref">Naam afbeelding</label><br><br>
        <?php echo "<input type='text' name='imageref'  value='".$data['imageref']."' required>"; ?>
        <br><br>

        <label for="prodname">Naam product</label><br><br>
        <?php echo "<input type='text' name='prodname'  value='".$data['prodname']."' required>"; ?>
<br>
<br>
    <label for="proddesc">Beschrijving</label><br><br>
    <?php echo "<input type='text' name='proddesc'  value='".$data['proddesc']."' required>"; ?>
 
  
    <br><br>

        <fieldset>
        <input type="submit" class="submit" name="wijzigen" value="Wijzigen"></input>
        </fieldset>
    </form>

    
</body>
</html>