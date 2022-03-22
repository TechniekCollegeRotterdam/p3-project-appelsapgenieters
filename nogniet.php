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
 
	<!-- Deze pagina is bestemd om functionaliteiten die nog niet af zijn van een 
        nette boodschap te voorzien -->
 	<main>	
		  <img class="centreer" src="images/plaatje041.jpg" alt="main page image" width="1000px" height="500px"> 
		  <p></p>
          <p> Er wordt hard gewerkt om u op deze website zo goed mogelijk te voorzien van 
              alles wat uw leven een stuk makkelijker maakt.
          </p> 
		  <p>
			  Maar ook wij kunnen geen ijzer met handen breken.
		  </p>
		  <p>
			  De door u aangevraagde pagina / functie is nog niet klaar voor gebruik.
		  </p>
	</main>
	
</body>
</html>
	
