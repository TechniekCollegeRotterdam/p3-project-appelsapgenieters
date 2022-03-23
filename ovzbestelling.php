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
 
	<!-- op deze pagina de informatie overzichten van de tabel purchase -->
 	<main>	
 
	<!-- op deze pagina de informatie overzichten van de tabel purchase -->
    <main>	
        <p>Een overzicht van alle bestellingen<br>
			Per bestelling wordt getoond: id bestelling, datum bestelling, afleverdatum<br>
			<a href="infbestelling.php">Overzicht bestelling</a></p>
        <p>Een overzicht van de bestellingen die zijn gedaan in de maand september<br>
			Per bestelling wordt getoond: id purchase, datum betaling, bedrag betaald <br>
			<a href="infbestelmnd.php">Bestelling per september</a></p>
        <p>Een overzicht van alle details per bestelling<br>
			Per bestelling wordt getoond:  id purchase, datum bestelling, bedrag betaald, productid, aantal producten, prijsbetaald<br>
			<a href="infbesteldetails.php">Bestelling met regels</a></p>
        <p>Een overzicht van bestellingen die meer dan 2 detailregels hebben<br>
			Per bestelling wordt getoond: id purchase, datum volledig betaald, aantal producten, productid <br>
			<a href="infbestelmeerdetails.php">Bestelling - &gt;2 regels</a></p>
        <p>Een overzicht van het gemiddeld reeds ontvangen bedrag per bestelling<br>
			Het overzicht toont het bedrag dat gemiddeld betaald is over alle bestellingen<br>
			<a href="infbestelgemprijs.php">Bestelling gem prijs</a></p>
        <p>Een overzicht van de bestellingen die in januari van dit jaar zijn gedaan<br>
			Per bestelling wordt getoond:  id purchase, datum bestelling, bedrag betaald<br>
			<a href="infbestelvorigmnd.php">Bestellingen vorige mnd</a></p>
        <p>Het totaal aantal bestellingen tot nu toe<br>
			Het overzicht geeft aan hoeveel bestellingen (purchases) er in totaal zijn gedaan. <br>
			<a href="infbesteltotaant.php">totaal aantal bestelling</a></p>
    </main>
	
</body>
</html>