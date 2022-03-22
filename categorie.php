<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Company</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<title>Catogorie</title>
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
    <main>
        <h1>Welke catogorieën van de producten hebben we?</h1>
        <section>
            <article>
                <p>We hebben 8 verschillende catogorieën van producten!<br>
                </p>
            </article>
        </section>
    </main>
</body>

</html>