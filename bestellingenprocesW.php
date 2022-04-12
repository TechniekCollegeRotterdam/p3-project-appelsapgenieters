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

            include "navadmin.php";
            if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
            {
                header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
            exit();
            }

		?>
        	</header>

<main>

<?php
   $errorfree = true;
if(! isset($_POST['wijzigen']))
{   $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, wijzigen is niet gelukt</div>";
    echo "<div class='panel-body'><br>U heeft niks gewijzigt.</div>";
    echo "</div>";
    echo "</div>";
    exit();
}


if($errorfree)
{
    require_once "dbconnect.php";
    $id = filter_var($_POST["idpurchase"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM purchase WHERE idpurchase = :id");
    $query->bindValue(':id', $id);
    $query->execute();
    if($query->rowCount()<>0)
    {
        $errorfree = false;
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, wijzigen is niet gelukt</div>";
        echo "<div class='panel-body'><br>U heeft niks gewijzigt.</div>";
        echo "</div>";
        echo "</div>";
    }
}

if($errorfree)
{
    try
    {
        //veld "idpurchase en clientid" hoeft niet geschoond te worden, omdat de id automatisch wordt gezet.

        // veld "purchasedate, paidamount, paidinfulldate en deliverydate" hoeft niet geschoond te worden, omdat waarde door formulier wordt gevuld
 

        $query = $db->prepare("UPDATE purchase SET(purchasedate, paidinfulldate, deliverydate)
         VALUES (:purchasedate, :paidinfulldate, :deliverydate)
         WHERE idpurchase = :cidpurchase");
         $query->bindValue(':purchasedate', $_POST['purchasedate']);
         $query->bindValue(':paidinfulldate', $_POST['paidinfulldate']);
         $query->bindValue(':deliverydate', $_POST['deliverydate']);
         $query->execute();
         echo "<div class='container'>";
         echo "<div class='panel panel-primary'>";
         echo "<div class='panel-heading'><br><br>Wijzigen is succesvol</div>";
         echo "<div class='panel-body'><br>U heeft de bestelling gewijzigt van.".$db->lastInsertId()."</div>";
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

} else{
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, wijzigen is niet gelukt</div>";
    echo "<div class='panel-body'><br>U heeft niks gewijzigt.</div>";
    echo "</div>";
    echo "</div>";  
}

?>

</main>
</body>
</html>