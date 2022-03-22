<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Lipton Ice Tea Sparkling Original 1,5L</title>
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
         <h1>Lipton Ice Tea Sparkling Original 1,5L</h1>
         <section>
             <article>
             <img src="images/Liptonicetea3.jpg" alt="frisdrank" width="450" height="450">
                 <br>
                 <p>€2.79</p>
                 <button class="colorb buttonposition">toevoegen</button>
                 <h2>Omschrijving</h2>
                 <p>Frisse, levendige, fijne en delicate champagne.<br>
                  De geur van citrusvruchten en witte bloemen gecombineerd met de geur van kleine rode vruchten. De wijn is rond, uitgebreid, delicaat en langdurig.<br>
                  De smaak is zuiver zonder droog te zijn.  Winnaar van een gouden medaille op de International Wine Challenge.  </p>

             </article>
         </section>	

	</main>
	
</body>
</html>
	
