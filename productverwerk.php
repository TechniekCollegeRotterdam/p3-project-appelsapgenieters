<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwerk</title>
    <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
	</header>
<!-- This is for the registersystem -->
<?php
session_start();
include 'navadmin.php';
$errorfree = true;
echo "<br><main>";
if(! isset($_POST['toevoegen']))
{
    $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, product toevoegen niet gelukt</div>";
    echo "<div class='panel-body'><br>U zult eerst (al) de productgegevens moeten invullen</div>";
    echo "</div>";
    echo "</div>";
    exit();
}


if($errorfree)
{
    require_once "dbconnect.php";
    $pname = filter_var($_POST["prodname"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM product WHERE prodname = :pname");
    $query->bindValue(':pname', $pname);
    $query->execute();
    if($query->rowCount()<>0)
    {
        $errorfree = false;
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, product toevoegen niet gelukt</div>";
        echo "<div class='panel-body'><br>U zult eerst (al) de productgegevens moeten invullen</div>";
        echo "</div>";
        echo "</div>";
    }
}

if($errorfree)
{
    try
    {
        $sq = filter_var($_POST["stockquantity"], FILTER_SANITIZE_STRING);
        $pr = filter_var($_POST["price"], FILTER_SANITIZE_STRING);
        $image = filter_var($_POST["imageref"], FILTER_SANITIZE_STRING);
        $pd = filter_var($_POST["prodname"], FILTER_SANITIZE_STRING);
        $pdc = filter_var($_POST["proddesc"], FILTER_SANITIZE_STRING);


        $query = $db->prepare("INSERT INTO product(idproduct, typeid, stockquantity, price, imageref, prodname, proddesc)
         VALUES (:idproduct, :typeid, :stockquantity, :price, :imageref, :prodname, :proddesc)");
      $query->bindValue(':idproduct', $_POST['idproduct']);
       $query->bindValue(':typeid', $_POST['typeid']);
       $query->bindValue(':stockquantity', $_POST['stockquantity']);
         $query->bindValue(':price', $pr);
         $query->bindValue(':imageref', $image);
         $query->bindValue(':prodname', $pd);
         $query->bindValue(':proddesc', $pdc);
         $query->execute();
         echo "<div class='container'>";
         echo "<div class='panel panel-primary'>";
         echo "<div class='panel-heading'><br><br>Product toevoegen is succesvol</div>";
         echo "<div class='panel-body'><br>Uw heeft een nieuw product toegevoegd.</div>";
         echo "</div>";
         echo "</div>";
    }
    catch(PDOException $e)
    {
        $sMsg = '<p>
        Regelnummer: '.$e->getLine().'<br />
        Bestand: '.$e->getFile().'<br />
        Foutmelding: '.$e->getMessage().'
        </p>';
        trigger_error($sMsg);
}
}
?>

</main>
</body>
</html>