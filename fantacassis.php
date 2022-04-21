<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Fanta Cassis 1,5L</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
<header>
	<img src="images/Logo.jpg" alt="logo">
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
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>
         <h1>Fanta Cassis 1,5L</h1>
         <section>
             <article>
                 <img src="images/fantacassis1.jpg" alt="frisdrank" width="450" height="450">
                 <br>
                 <p>€2,03</p>
                 <button class="colorb buttonposition">toevoegen</button>
                 <h2>Omschrijving</h2>
                 <p>Proef de heerlijke cassisverfrissing van Fanta.<br>
                  Fanta Cassis is een combinatie van sprankelend water en zwarte bessensap.<br>
                   De 1,5L petfles is de ideale verpakking om deze frisdrank uit te schenken. </p>

             </article>
         </section>	

	</main>
	
</body>
</html>
	
