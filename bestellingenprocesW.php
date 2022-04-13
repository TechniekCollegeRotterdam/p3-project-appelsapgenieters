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

   //This checked of the button "wijzigen" is pressed.
if(! isset($_POST['wijzigen']))

{   $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, wijzigen is niet gelukt</div>";
    echo "<div class='panel-body'><br>U heeft niks gewijzigd.</div>";
    echo "</div>";
    echo "</div>";
    exit();
}


if($errorfree)
{
    require_once "dbconnect.php";
    $idpurchase = filter_var($_POST["idpurchase"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM purchase INNER JOIN client ON purchase.clientid = client.idclient WHERE idpurchase = :purid");
    $query->bindValue(':purid', $idpurchase);
    $query->execute();
    if($query->rowCount()<>1)
    {
        $errorfree = false;
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, wijzigen is niet gelukt</div>";
        echo "<div class='panel-body'><br>U heeft niks gewijzigt.</div>";
        echo "</div>";
        echo "</div>";
        exit();
    }
}

if($errorfree)
{
    try
    {
        //veld "idpurchase en clientid" hoeft niet geschoond te worden, omdat de id automatisch wordt gezet.

        // veld "purchasedate, paidamount, paidinfulldate en deliverydate" hoeft niet geschoond te worden, omdat waarde door formulier wordt gevuld
 
        $pudate = date("Y-m-d", strtotime($_POST['purchasedate']));
        echo "Purchase moet worden: ".$pudate."<br>";
        $pifdate = date("Y-m-d", strtotime($_POST['paidinfulldate']));
        echo "Paid in full moet worden: ".$pifdate."<br>";
        $deldate = date("Y-m-d", strtotime($_POST['deliverydate']));
        echo "Delivery moet worden: ".$deldate."<br>";
        echo "Te wijzigen gegevens van: ".$_POST['idpurchase'];
//        $query = $db->prepare("UPDATE purchase SET `purchasedate` = '2020-05-01', `paidinfulldate` = '2020-05-11', `deliverydate` = '2020-05-21' WHERE `purchase`.`idpurchase` = 5;
        $query = $db->prepare("UPDATE purchase SET purchasedate = :purchasedate, 
                        paidinfulldate = :paidinfulldate, deliverydate = :deliverydate
                     WHERE idpurchase = :purid");
         //id primary key kan niet gewijzigd worden.
         $query->bindValue(':purid', $_POST['idpurchase']);
         $query->bindValue(':purchasedate', $pudate);
         $query->bindValue(':paidinfulldate', $pifdate);
         $query->bindValue(':deliverydate', $deldate);
         $query->execute();
         echo "<br>Aantal gewijzigde gegevens is: ".$query->rowCount();
         echo "<div class='container'>";
         echo "<div class='panel panel-primary'>";
         echo "<div class='panel-heading'><br><br>Wijzigen is succesvol</div>";
         echo "<div class='panel-body'><br>U heeft de bestelling gewijzigd van aankoop nummer ".$_POST["idpurchase"].".</div>";
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

}  else{
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Wijzigen mislukt</div>";
    echo "<div class='panel-body'><br>Het bestelling wijzigen van".$data["idpurchase"]." is mislukt!</div>";
    echo "</div>";
    echo "</div>";
}

?>

</main>
</body>
</html>