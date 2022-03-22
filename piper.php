<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Piper Heidsieck Brut Champagne</title>
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
        <h1>Piper Heidsieck Brut Champagne</h1>
        <section>
            <article>
                <img src="images/PiperScheidziek.jpg" alt="champagne" width="450" height="450">
                <br>
                <p>€35,99</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>De Piper-Heidsieck Cuvée Brut is het visitekaartje van de Piper-Heidsieck champagnes.<br>
                    Het champagnehuis werd opgericht in 1785 door de heer Florens-Louis Heidsieck en heet officieel
                    “Piper-Heidsieck Maison”. <br>
                    Inmiddels is het één van de oudste champagnehuizen ter wereld. Piper-Heidsieck brut is een champagne
                    van structuur met soepele en ronde smaken. Deze uitgebalanceerde cuvée bestaat grotendeels uit pinot
                    noir, pinot meunier en chardonnay.<br>
                    Om de kwaliteit te waarborgen, rijpen alle jaargangen 24 tot 30 maanden. Daarnaast worden er streng
                    geselecteerde wijnen op basis van de chardonnay druif toegevoegd.<br>
                    Zo geniet je elk jaar weer van dezelfde levendige en frisse smaak van deze Piper-Heidsieck
                    champagne! De karakteristieke afdronk met een Oosterse smaak is de finishing touch voor een fles met
                    klasse. Piper-Heidsieck champagne brut is perfect als aperitief of in combinatie met oesters of een
                    ander licht visgerecht.<br>
                    De onderscheidingen van verschillende gerenomeerde wijncompetities
                    onderstrepen de kwaliteit van deze Piper champagne.<br>
                    Zo won hij bijvoorbeeld 92 punten in Wine
                    Spectator en viel hij in de prijzen bij zowel de IWC als de IWSC. Je bestelt jouw fles gemakkelijk
                    via de website. En bestel je voor 22:00 uur? Dan heb je jouw Piper-Heidsieck champagne brut morgen
                    in huis. Proost!</p>

            </article>
        </section>

    </main>

</body>

</html>