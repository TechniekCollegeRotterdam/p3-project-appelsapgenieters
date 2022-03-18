<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
	<header>
		<h1>Company</h1>
	    <!-- hieronder wordt het menu opgehaald. -->
	    <?php
		    include "nav.html";
	    ?>
	</header>
 
	<!-- op deze pagina de informatie overzichten van de tabel client -->
 	<main>
        <p>Een overzicht van al onze klanten. Per klant wordt getoond:<br>
			Roepnaam, achternaam, woonplaats, geboortedatum.<br><a href="infklant.php">Roep dit overzicht op</a></p>
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
        <p>Een overzicht van het aantal klanten per woonplaats:<br>
			Per woonplaats wordt getoond: Woonplaats, aantal klanten in die woonplaats<br><a href="infklantperwpl.php">Roep dit overzicht op</a></p>
    </main>
	
</body>
</html>
