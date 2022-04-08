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

 	<!-- op deze pagina de informatie overzichten van de tabel product -->
  	<main>
         <p>Een overzicht van al onze producten.<br>
 			Per product wordt getoond: productnaam, productomschrijving, voorraad en prijs.<br>
 			<a href="infprod.php">Overzicht producten</a></p>
         <p>Een overzicht van alle producten met een prijs lager dan &euro; 5,--.<br>
 			Per product wordt getoond: product id, productnaam, type-id en prijs.<br>
 			<a href="infprodlaagprijs.php">Producten lage prijs</a></p>

         <p>De gemiddelde prijs van al onze producten.<br>
 			Er wordt getoond: gemiddelde prijs.<br>
 			<a href="infprodgemprijs.php">Producten gem prijs</a></p>
         <p>Een overzicht van al onze producten en het bijbehorende type.<br>
 			Per product wordt getoond: productnaam, productomschrijving, idtype en type naam.<br>
 			<a href="infprodtype.php">Producten - type</a></p>
     </main>

 </body>
 </html> 