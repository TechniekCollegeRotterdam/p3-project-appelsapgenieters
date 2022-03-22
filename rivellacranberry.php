<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Rivella Cranberry Fles 1,5L</title>
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
        <h1>Rivella Cranberry Fles 1,5L</h1>
        <section>
            <article>
                <img src="images/Rivella2.jpg" alt="frisdrank" width="450" height="450">
                <br>
                <p>€2.03</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Het recept van Rivella is geheim; maar wat we wel kunnen vertellen is dat Rivella gemaakt wordt op basis van melkserum.<br>
                 Rivella Cranberry is al het goede van Rivella, met de heerlijk frisfruitige smaak van cranberry.<br>
                 Net als de andere smaken van Rivella bevat ook deze variant slechts 5 kcal per 100 ml. </p>

            </article>
        </section>

    </main>

</body>

</html>