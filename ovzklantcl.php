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

 	<!-- op deze pagina de informatie overzichten van de tabel client -->
  	<main>
         <p>Een overzicht van alle klanten uit Amsterdam:<br>
 			Per klant wordt getoond: Achternaam, adres, geslacht en woonplaats<br><a href="infklantwpl.php">Roep dit overzicht op</a></p>
         <p>Een overzicht van alle klanten met hun bestellingen:<br>
 			Per klant wordt getoond: Roepnaam, Achternaam, adres, id van bestelling, besteldatum, betaaldbedrag<br><a href="infklantbestelling.php">Roep dit overzicht op</a></p>
         <p>Een overzicht van alle klanten, die geen bestelling hebben geplaatst:<br>
 			Per klant wordt getoond: ID klant, Achternaam, geboortedatum, woonplaats<br><a href="infklantgeenbestelling.php">Roep dit overzicht op</a></p>
         <p>Een overzicht van de klanten met hun grootste bestelling:<br>
 			Per klant wordt getoond: Achternaam, adres, woonplaats, grootste bedrag betaald<br><a href="infklantmaxbestelling.php">Roep dit overzicht op</a></p>
         <p>Een overzicht van alle klanten gesorteerd op postcode:<br>
 			Per klant wordt getoond: Woonplaats, achternaam, adres, postcode<br><a href="infklantpostcode.php">Roep dit overzicht op</a></p>
     </main>

 </body>
 </html>
