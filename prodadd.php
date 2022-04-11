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
        if(isset($_SESSION["bh-login"]))
        {
            include "navadmin.php";
        } elseif(isset($_SESSION["cl-login"]))
        {
            include "navclient.php";
        } else
			include "navbezoeker.html";

        require_once "dbconnect.php";
        // Hier worden de gegevens van de landentabel opgehaald voor het formulier
        $query = $db->prepare("SELECT * FROM product");
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
    <label for="givenname">typeid</label><br><br>
    <input type="text" name="idtype" placeholder="Het nummer van het type van het product" required autofocus>
  
    <br><br>

    <label for="surname">Hoeveelheid</label><br><br>
    <input type="text" name="quantity" placeholder="Hoeveelheid van het product " required>
    <br><br>

    <label for="middleinitial">Prijs</label><br><br>
    <input type="text" name="prodprice" placeholder="Prijs van het product">
    <br><br>

    <label for="title">naam afbeelding</label><br><br>
    <input type="text" name="imgname" placeholder="de naam van de afbeelding. bijv: Appel.jpg">
    <br><br>

    <label for="title">Naam product</label><br><br>
    <input type="text" name="nameprod" placeholder="de naam van het product">
    <br><br>

    <label for="title">beschrijving van het Product</label><br><br>
    <input type="text" name="descprod" placeholder="de beschrijving van het product">
    <br><br>
    </fieldset>

        <fieldset>
        <input type="submit" class="submit" name="toevoegen" value="toevoegen"></input>
        </fieldset>
    </form>

    
</body>
</html>