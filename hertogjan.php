<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Hertog Jan Natuurzuiver bier krat 30cl</title>
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
        <h1>Hertog Jan Natuurzuiver bier krat 30cl</h1>
        <section>
            <article>
                <img src="images/HertogJan.jpg" alt="bier" width="450" height="450">
                <br>
                <p>€17,99</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Hertog Jan pilsener is het visitekaartje van Hertog jan. <br>
                Gebrouwen van zacht water uit de ardennen en van zorgvuldig geselecteerde hop en mout. <br>
                Uit liefde voor bier. Categorie: pilsener Soort, smaak: vol, met een aangenaam bittere afdronk Brouwerij, plaats: Hertog Jan brouwerij, arcen, Nederland Alcoholpercentage: 5.1%</p>

            </article>
        </section>

    </main>

</body>

</html>