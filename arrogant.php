<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Arrogant Frog Single Bier</title>
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
         <h1>Arrogant Frog Single Bier</h1>
         <section>
             <article>
                 <img src="images/ArrogantFrogSingleBier02.jpg" alt="wijn" width="100" height="100">
                 <br>
                 <p>€7,98</p>
                 <button class="colorb">toevoegen</button>
                 <h2>Omschrijving</h2>
                 <p>Een mooi gemaakte rode wijn waarin je vanille, kersen en bessen ruikt.<br>
                  De wijn heeft een zachte smaak met veel cassisfruit, veel structuur, een goede afdronk en een lekkere kruidigheid.<br>
                   Jean-Claudes missie was: goede en betaalbare wijn maken voor de moderne wijndrinker,
                      want een dure wijn is niet altijd persé een goede. Lees meer over de wijnen van Arrogant Frog en het wijnhuis Les Domaines Paul Mas</p>

             </article>
         </section>	

	</main>
	
</body>
</html>
	
