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
if(!isset($_POST['wijzigen']))

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
    $query = $db->prepare("SELECT * FROM product    
    INNER JOIN type ON product.typeid = type.idtype 
    WHERE idproduct = :proid");
    $query->bindValue(':proid', $idproduct);
    $query->execute();
    if($query->rowCount()<>1){
     
     
        try
        {
            $voor = $_POST['stockquantity'];
            echo "Voorraad moet worden: ".$voor."<br>";
            $prijs = $_POST['price'];
            echo "Prijs moet worden: ".$prijs."<br>";
            $img = $_POST['imageref'];
            echo "Afbeelding moet worden: ".$img."<br>";
            $prdn = $_POST['prodname'];
            echo "Naam van product moet worden: ".$prdn."<br>";
            $prdd = $_POST['proddesc'];
            echo "Beschrijving van product moet worden: ".$prdd."<br>";
            echo "Te wijzigen gegevens van: " .$_POST['idproduct'];
            
            $query = $db->prepare("UPDATE product SET  
                            stockquantity = :stockquantity, price = :price, imageref = :imageref, prodname = :prodname , 
                            proddesc = :proddesc
                         WHERE idproduct = :proid");
             //id primary key kan niet gewijzigd worden.
    
            //  $query->bindValue(':proid', $_POST['idproduct']);
             $query->bindValue(':proid', $_POST['idproduct']);
             $query->bindValue(':stockquantity', $voor);
             $query->bindValue(':price', $prijs);
             $query->bindValue(':imageref', $img);
             $query->bindValue(':prodname', $prdn);
             $query->bindValue(':proddesc', $prdd);


            
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
       
    }

  
}

  else{
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Wijzigen mislukt</div>";
    echo "<div class='panel-body'><br>Het bestelling wijzigen van  is mislukt!</div>";
    echo "</div>";
    echo "</div>";
}

?>

</main>
</body>
</html>