<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Pommery Brut Royale 75cl</title>
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
         <h1>Pommery Brut Royale 75cl</h1>
         <section>
             <article>
                 <img src="images/POMMERYBRUTROYALChampagne.jpg" alt="champagne" width="300" height="300">
                 <br>
                 <p>€34,99</p>
                 <button class="colorb">toevoegen</button>
                 <h2>Omschrijving</h2>
                 <p>Frisse, levendige, fijne en delicate champagne. De geur van citrusvruchten en witte bloemen gecombineerd met de geur van kleine rode vruchten.<br>
                  De wijn is rond, uitgebreid, delicaat en langdurig. De smaak is zuiver zonder droog te zijn.<br>
                Winnaar van een gouden medaille op de International Wine Challenge.</p>

             </article>
         </section>	

	</main>
	
</body>
</html>
	
