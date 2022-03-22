<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Hero Cassis Zero 1,25L</title>
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
        <h1>Hero Cassis Zero 1,25L</h1>
        <section>
            <article>
                <img src="images/herocassis1.jpg" alt="frisdrank" width="450" height="450">
                <br>
                <p>€1.73</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Hero Cassis Zero is een frisdrank met enkel van nature aanwezige suikers uit zwarte bessen. Met deze light verfrissing heb je wel de unieke smaak van Hero Cassis maar niet de calorieën.<br> 
Zero frisdrank met slechts 4kcal per 100ml<br> 
Met gefermenteerd fruit voor die unieke, volle ronde smaak <br>
Frisdrank zonder toegevoegde suikers. </p>

            </article>
        </section>

    </main>

</body>

</html>