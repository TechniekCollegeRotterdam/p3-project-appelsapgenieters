<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
	<header>
    <img src="images/Logo.jpg" alt="logo">
		<h1>Company</h1>
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
		?>
	</header>
 
	<!-- op deze pagina de informatie overzichten van de tabel type -->
 	<main>
        <p>Klik hieronder om een overzicht van alle categorieën van de producten te krijgen.<br>
            Per type wordt getoond: idtype, naam type.<br>
        <a href="infcategorie.php">Overzicht categorieën</a></p>

        <p>Klik hieronder om een overzicht van alle categorieën met een &quot;a&quot; in de 
           naam te krijgen.<br>
           Per type wordt getoond: idtype, naam type<br>
        <a href="infcatmeta.php">Categorie met a</a></p>

        <p>Klik hieronder om een overzicht van categorieën met bijbehorende producten te 
            krijgen.<br>
            Per type wordt getoond: naam type, product naam, aantal op voorraad<br>
        <a href="infcatproduct.php">Categorie met product</a></p>

        <p>Klik hieronder om een overzicht van categorieën met producten boven &euro; 100,-- 
            te krijgen.<br>
            Per type wordt getoond: naam type, productnaam, product beschrijving, prijs<br>
        <a href="infcatprodprijs.php">Categorie - prod &euro; 100</a></p>

        <p>Klik hieronder om een overzicht van de gemiddelde productprijs per categorie 
            te krijgen.<br>
            Per type wordt getoond: id type, naam type, gemiddelde prijs van alle producten van dat type<br>
        <a href="infcatavgprodprice.php">Categorie - gem. prodprijs</a></p>

        <p>Klik hieronder om een overzicht van categorieën met alle bijbehorende producten 
            te krijgen met een &quot;k&quot; in de naam.<br>
            Per type wordt getoond: naam type, productnaam, prijs, aantal op voorraad<br>
        <a href="infcatallprod.php">Categorie met alle producten</a></p>

        <p>Klik hieronder om een overzicht van categorieën met producten beneden de &euro; 5 
            te krijgen.<br>
            Per type wordt getoond: naam type, product omschrijving, voorraad, prijs<br>
        <a href="infcatprodklprijs.php">Categorie - prod &euro; 5</a></p>
    </main>
	
</body>
</html>