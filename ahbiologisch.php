<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>AH Biologisch Halfvolle melk</title>
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
        <h1>AH Biologisch Halfvolle melk</h1>
        <section>
            <article>
                <img src="images/Biologischemelk.jpg" alt="melk" width="450" height="450">
                <br>
                <p>€2.09</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Biologische halfvolle melk in een handige 2 liter kan.<br>
                 Niet alleen is deze Nederlandse melk biologisch, ook de kan, dop en wikkel zijn van biobased materiaal gemaakt.<br>
                 Nederlandse biologische melk Kan, dop en wikkel van biobased materiaal Eerste biobased melkkan op de Nederlandse markt Handige 2 liter kan, makkelijk uitschenkbaar</p>

            </article>
        </section>

    </main>

</body>

</html>