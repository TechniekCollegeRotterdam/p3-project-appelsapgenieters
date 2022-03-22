<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Campina Halfvolle melk</title>
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
        <h1>Campina Halfvolle melk</h1>
        <section>
            <article>
                <img src="images/campinaopjemel.jpg" alt="melk" width="450" height="450">
                <br>
                <p>€2,45</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Een glas verse melk is lekker en gezond. Het bevat voedingsstoffen die je dagelijks nodig hebt zoals
                    calcium en proteine.<br>
                     Daarnaast besteden Campina boeren extra aandacht aan koe, natuur en klimaat.<br>
                    Vers, lekker en gezond Van nature rijk aan calcium, proteine, vitamine b2 en b14 Planetproof
                    gecertificeerd en daarmee duurzamer geproduceerd Gemaakt van Nederlandse weidemelk.</p>

            </article>
        </section>

    </main>

</body>

</html>