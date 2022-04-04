<?php
if(! isset($_POST['wijzigen']))
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


if($errorfree)
{
    require_once "dbconnect.php";
    $eml = filter_var($_POST["idpurchase"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("DELETE FROM purchase WHERE idpurchase = :cidpurchase");
    $query->bindValue(':cidpurchase', $_POST["idpurchase"]);
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
 

        $query = $db->prepare("UPDATE purchase SET(idpurchase, purchasedate, paidamount, paidinfulldate, deliverydate, clientid)
         VALUES (:idpurchase, :purchasedate, :paidamount, :paidinfulldate, :deliverydate, :clientid)
         WHERE idpurchase = :cidpurchase");
         $query->bindValue(':purchasedate', $_POST['purchasedate']);
         $query->bindValue(':paidamount', $_POST['paidamount']);
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
}

else{
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'>Helaas</div>";
    echo "<div class='panel-body'>Verwijderen mislukt.</div>";
    echo "</div>";
    echo "</div>";
    header('Refresh: 3; url=bestellingenadmin.php');   
}
        

    ?>