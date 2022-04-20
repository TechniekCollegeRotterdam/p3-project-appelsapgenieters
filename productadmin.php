<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Bestellingen van de klanten</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>

<body>
    <header>
        <img src="images/Logo.jpg" alt="logo">
        <!-- hieronder wordt het menu opgehaald. -->
        <?php
        session_start();
        include "navadmin.php";


            if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
}
		?>
    </header>

    <body>

        <h1>Product beheren</h1>
        <p>Kies hier wat u wilt doen</p>


        <h2>Kies hier om bestellinge te verwijderen</h2>
        <a href="bestellingenadminV.php">
            <input type="submit" class="admindelete" value="verwijderen">
        </a>

        <br>


        <h2>Kies hier om een product te wijzigen</h2>

        <a href="productscherm.php">
        <input type="submit" class="adminchange" value="wijzigen">
        </a>


    </body>

</html>