<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Lipton Ice Tea Green Original 1,5L</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
	<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
        <?php
        if(isset($_SESSION["bh-login"]= true))
        {
            include "navadmin.php";
        } elseif(isset($_SESSION["cl-login"]= true))
        {
            include "navclient.php";
        } else
			include "navbezoeker.html";
		?>
	</header>
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>
         <h1>Lipton Ice Tea Green Original 1,5L</h1>
         <section>
             <article>
             <img src="images/Liptonicetea2.jpg" alt="frisdrank" width="450" height="450">
                 <br>
                 <p>€2.79</p>
                 <button class="colorb buttonposition">toevoegen</button>
                 <h2>Omschrijving</h2>
                 <p>Lipton Ice Tea Green Original is een heerlijk verfrissende drank met de lichte smaak van groene thee;<br>
                  dat heb je soms gewoon even nodig! De groene ijsthee is koolzuurvrij.<br>
                   Lipton Ice Tea Green is laag in suiker en daardoor de perfecte verfrissing voor tussendoor.<br>
                    Het maken van Lipton Ice Tea begint natuurlijk bij de thee.<br>
                  De Green variant is gemaakt op basis van groene thee-extracten. Fris en licht, laag in suiker met Lipton Ice Tea Green. </p>

             </article>
         </section>	

	</main>
	
</body>
</html>
	
