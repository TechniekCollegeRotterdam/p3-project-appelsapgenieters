<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historie</title>
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

    <main>	
    <h1>Historie</h1>
		  <img class="centreer" src="images/oudewinkel.jpg" alt="main page image" width="900px" height="500px"> 
		  <p>Appelsap is opgericht in 1969 midden in het centrum van Rotterdam. Destijds verkochten we alleen appelsap. <br> Nu 53 jaar later is ons bedrijf enorm gegroeid en verbeterd. We verkopen nu andere soorten drank dan alleen appelsap en we bezitten een sterk team. U kunt onze werknemers zien op de werknemerspagina en alle producten op de productpagina.     </p> 
           <br>
		  <img class="centreer" src="images/nieuwewinkel.jpg" alt="main page image" width="900px" height="500px">
		  <p>Dit is de winkel nu. Door ons grote succes heeft de baas een Lamborghini kunnen kopen. Ook is het pand aan de linkerkant na 53 jaar eindelijk verkocht.</p>
		   
	</main>
</body>
</html>