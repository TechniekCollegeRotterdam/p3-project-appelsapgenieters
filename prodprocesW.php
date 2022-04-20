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
    $idproduct = filter_var($_POST["idproduct"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM product WHERE idproduct = :proid");
    $query->bindValue(':proid', $idproduct);
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
        
 
       
        $query = $db->prepare("UPDATE product SET typeid = :typeid, 
                        stockquantity = :stockquantity, price = :price, imageref = :imageref, prodname = :prodname , proddesc = :proddesc
                     WHERE idproduct = :proid");
         //id primary key kan niet gewijzigd worden.
         $query->bindValue(':proid', $_POST['idproduct']);
         $query->bindValue(':typeid', $_POST['typeid']);
         $query->bindValue(':stockquantity', $_POST['stockquantity']);
         $query->bindValue(':price', $_POST['price']);
         $query->bindValue(':imageref', $_POST['imageref']);
         $query->bindValue(':prodname', $_POST['prodname']);
         $query->bindValue(':proddesc', $_POST['proddesc']);
         $query->execute();
         echo "<br>Aantal gewijzigde gegevens is: ".$query->rowCount();
         echo "<div class='container'>";
         echo "<div class='panel panel-primary'>";
         echo "<div class='panel-heading'><br><br>Wijzigen is succesvol</div>";
         echo "<div class='panel-body'><br>U heeft de bestelling gewijzigd van aankoop nummer ".$_POST["idproduct"].".</div>";
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
    echo "<div class='panel-body'><br>Het bestelling wijzigen van".$data["idproduct"]." is mislukt!</div>";
    echo "</div>";
    echo "</div>";
}

?>

</main>
</body>
</html>