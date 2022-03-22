<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Bollinger Champagne special cuvée</title>
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
		?>
	</header>
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>
         <h1>Bollinger Champagne special cuvée</h1>
         <section>
             <article>
                 <img src="images/BollingChampagne.jpg" alt="champagne" width="450" height="450">
                 <br>
                 <p>€62,00</p>
                 <button class="colorb buttonposition">toevoegen</button>
                 <h2>Omschrijving</h2>
                 <p>Helder, lichtgeel van kleur met gouden kern.<br>
                  Een weelderige geur met complexe aroma's, licht toast en onder grote hoeveelheid zuurstof gemaakt: kenmerkend voor de stijl van Bollinger.<br>
                   Een karaktervolle Champagne met veel elegantie en reserve. Bekroond met 93 punten van Wine Spectator en een zilveren médaille op de Decanter World Wine Awards.</p>

             </article>
         </section>	

	</main>
	
</body>
</html>
	
