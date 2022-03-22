<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Hero Cassis 1,25L</title>
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
        <h1>Hero Cassis 1,25L</h1>
        <section>
            <article>
                <img src="images/herocassis2.jpg" alt="frisdrank" width="450" height="450">
                <br>
                <p>€1.73</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Hero 'THE ORIGINAL' Cassis, gemaakt van zwarte bessen uit eigen land, met een volle, ronde smaak.<br>
                 Dat maakt Hero Cassis de enige echte cassis.</p>

            </article>
        </section>

    </main>

</body>

</html>