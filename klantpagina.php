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
		<!-- hieronder wordt het menu opgehaald. -->
        <?php
		require 'loginklant.php';
		require 'dbconnect.php';
/* This is a check to see if the user is logged in. If the user is logged in, the code will be
executed. If not, the code will not be executed. */
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

	<?php			
if(!isset($_SESSION['cl-login']) || $_SESSION['cl-login'] == false)
{
	header('Refresh: 0; url=inlogklant.php?error=U moet eerst inloggen!');
exit();
} ?>
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>	
		 <section class="wrapper">
			 <article>
		 <a href="producten.php">
		  <img class="centreer" src="images/homepagefotoappelsap.nl.jpg" alt="main page image" width="1000px" height="600px"> 
		  </a>
		  <p> Welkom op de website van company. Wij vormen een jong en enthousiast bedrijf, 
			  waarmee wij u graag van dienst willen zijn met fantastische producten.</p> 
		  <p>
			  Om producten te kunnen bestellen, moet u zich registreren als klant. Dat kunt u 
			  via het menu doen. Wanneer u inlogt, krijgt u de mogelijkheid om producten te 
			  bestellen. Daardoor hoeft u ook niet steeds uw adresinformatie in te voeren.
		  </p>
		  <p>
			  Om u een indruk te geven van onze producten, ziet u hieronder een overzicht van
			  de eerste zes van onze producten.
		  </p>
		  <p>
			  <?php
			  // in onderstaande php source worden 6 producten op scherm getoond
			  include "zesproducten.php";
			  ?>
		  </p>
		  				 
		  </article>
		 </section>
	</main>
	
</body>
</html>
	
