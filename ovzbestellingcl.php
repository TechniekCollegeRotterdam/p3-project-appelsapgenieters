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
    <br>        <br>   
    <p>Een overzicht van de bestellingen die zijn gedaan in de maand september<br>
			Per bestelling wordt getoond: id purchase, datum betaling, bedrag betaald <br>
			<a href="infbestelmnd.php">Bestelling per september</a></p>

        <p>Een overzicht van de bestellingen die in januari van dit jaar zijn gedaan<br>
			Per bestelling wordt getoond:  id purchase, datum bestelling, bedrag betaald<br>
			<a href="infbestelvorigmnd.php">Bestellingen vorige mnd</a></p>

    </main>
	
</body>
</html>