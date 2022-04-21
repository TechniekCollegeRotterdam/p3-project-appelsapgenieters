<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<main>
    <section>
        <h1>Contact</h1>
        <p>Welkom bij onze contact informatie van het bedrijf Appelsapgenieters.nl</p>
    </section>
    <section>
        <p>U kunt ons via Telefoon of E-mail bereiken.</p>
    </section>
    <section>
        <p>Telefoonnummer:<h2>06-23629304</h2></p>
        <p>E-mail:<h2>appelsapgenieters@hotmail.com</h2></p>
    </section>
    <section>
        <p>Wij zien/horen graag uw mening over ons bedrijf zodat we ons kunnen verbeteren en de beste service kunnen leveren!</p>
    </section>
</main>
</body>
</html>