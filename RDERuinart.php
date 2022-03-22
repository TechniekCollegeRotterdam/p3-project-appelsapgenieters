<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>R De Ruinart 75cl</title>
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
        <h1>R De Ruinart 75cl</h1>
        <section>
            <article>
                <img src="images/RDeRuinart.jpg" alt="champagne" width="200" height="200">
                <br>
                <p>€62,00</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Sinds de oprichting in 1729 vormen uitmuntendheid en vakmanschap de kern van het oudste champagnehuis.<br>
                 Chardonnay is de ziel van Ruinart. Deze druif, voornamelijk afkomstig van de Côte des Blancs en Montagne de Reims, geeft elegantie, zuiverheid en een aromatische frisheid aan alle cuvées.<br>
                De balans tussen het eeuwenoude erfgoed en de drang tot innovatie heeft het tot een immer relevant en eigentijds champagehuis gemaakt.<br>
                 R de Ruinart is de originele expressie van het Ruinart-karakter.<br>
                 De brut champagne bevat een relatief groot aandeel (40%) chardonnay, aangevuld met 49% pinot noir en 11% meunier.</p>

            </article>
        </section>

    </main>

</body>

</html>