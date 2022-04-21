<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Crystal Clear Sparkling Lemon 1,5L</title>
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
        <h1>Crystal Clear Sparkling Lemon 1,5L</h1>
        <section>
            <article>
                <img src="images/CrystalClear2.jpg" alt="frisdrank" width="450" height="450">
                <br>
                <p>€1.63</p>
                <button class="colorb buttonposition">toevoegen</button>
                <h2>Omschrijving</h2>
                <p>Crystal Clear is een dorstlessende frisdrank gebaseerd op koolzuurhoudend water met een explosieve fruitsmaak.<br>
                 Verkrijgbaar in verschillende fruitige varianten. 
Deze laag calorische fruitdrank met citroensmaak:
<br> 
- Bevat maar 1 calorie per 100ml,
<br> 
- is vol van smaak, 
<br> 
- Ideaal voor elk moment op de dag - thuis of onderweg, 
<br> 
- Perfect voor een gezonde levensstijl.  </p>

            </article>
        </section>

    </main>

</body>

</html>