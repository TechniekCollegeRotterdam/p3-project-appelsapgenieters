<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten Toevoegen</title>
    <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
        <?php
        session_start();
        if(isset($_SESSION["bh-login"]))
        {
            include "navadmin.php";
        } elseif(isset($_SESSION["cl-login"]))
        {
            include "navclient.php";
        } else
			include "navbezoeker.html";

            if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
}

        require_once "dbconnect.php";
        // Hier worden de gegevens van de landentabel opgehaald voor het formulier
        $query = $db->prepare("SELECT * FROM type");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);

		?>
        
	</header>

    <br>
    <br>
    <br>
    <!-- This is for the registerfield in html -->
    <h1>Product toevoegen</h1>
    <form method="POST" action="productverwerk.php">
        
<fieldset>


<label for="imageref">nummer van het product</label><br><br>
    <input readonly type="text" name="idproduct" placeholder="De product id wordt bepaalt zodra je een nieuw product toevoegd.">
    <br><br>


<label for="typeid">Type id:</label> 
    <select class="form-control" id="typeid" name="typeid" required>
        <?php
        foreach($result as $rij)
        {
            echo '<option>';
            echo $rij['idtype'].' - '.$rij['name'];
            echo '</option>';
        }
        ?>
    </select>
  
    <br><br>

    <label for="stockquantity">Hoeveelheid</label><br><br>
    <input type="text" name="stockquantity" placeholder="Hoeveelheid van het product" required>
    <br><br>

    <label for="price">Prijs</label><br><br>
    <input type="text" name="price" placeholder="Prijs van het product">
    <br><br>

    <label for="imageref">naam afbeelding</label><br><br>
    <input type="text" name="imageref" placeholder="de naam van de afbeelding. bijv: images/Appel.jpg">
    <br><br>

    <label for="prodname">Naam product</label><br><br>
    <input type="text" name="prodname" placeholder="de naam van het product">
    <br><br>

    <label for="proddesc">beschrijving van het Product</label><br><br>
    <input type="text" name="proddesc" placeholder="de beschrijving van het product">
    <br><br>
    </fieldset>

        <fieldset>
        <input type="submit" class="submit" name="toevoegen" value="toevoegen"></input>
        </fieldset>
    </form>

    
</body>
</html>