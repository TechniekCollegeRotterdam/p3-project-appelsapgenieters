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
			include "nav.html";
		?>
	</header>
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>

<p>Login</p>

<form action="inlogklant.php" method="POST">

<input type="text" id="user" name="username" placeholder="username"/><br><br>
<input type="text" id="pass" name="password" placeholder="password"/><br><br>
<button type="submit" id="btn" name="login" default>login</button>

</form>

<a href="inlogklant.php"><div style="float:right"><button>logout</button></div></a>

    <h1>Welkom bij de Login page voor klant!</h1>

		 <a href="https://play.pokemonshowdown.com/">
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
			  include "zesproducten.php";
			  ?>
		  </p>
	</main>
	
</body>
</html>
	
