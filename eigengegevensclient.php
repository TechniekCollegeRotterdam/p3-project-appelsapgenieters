<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigen gegevens</title>
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
    <?php
    if(!isset($_SESSION['cl-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogklant.php?error=U moet eerst inloggen!');
exit();
} ?>
<br>
<br>
<?php 
include 'dbconnect.php';
         if(isset($_SESSION["cl-login"]) )
            {
/* This is a php statement that is executed when the page is loaded. It is used to display the name of
the user. */
    echo "<fieldset>";
    echo"<legend>Uw Gegevens</legend>";
    echo "<h2>Volledige naam</h2>";
    echo "<strong>".$_SESSION["title"]." ".$_SESSION["givenname"]." ".$_SESSION["surname"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo "<h2>Tussenvoegsel</h2>";
    echo "<strong>".$_SESSION["middleinitial"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo "<h2>Geslacht</h2>";
    echo "<strong>".$_SESSION["gender"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo"<h2>Email</h2>";
    echo "<strong>".$_SESSION["emailadress"]." </strong>";
    echo "<br>";
    echo "<br>";
    echo"<h2>Geboortedatum</h2>";
    echo "<strong>".$_SESSION["birthday"]." </strong>";
    echo "<br>";
    echo "<br>";
    echo"<h2>Woonplaats</h2>";
    echo "<strong>".$_SESSION["streetadress"]." ".$_SESSION["zipcode"]."<br>".$_SESSION["city"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo"<h2>Telefoonnummer</h2>";
    echo "<strong>".$_SESSION["telephonenumber"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo"<h2>Beroep</h2>";
    echo "<strong>".$_SESSION["occupation"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo"<h2>Wachtwoord</h2>";
    echo "<strong>".$_SESSION["passwrd"]."</strong>";
    echo "<br>";
    echo "<br>";
    echo "</fieldset>";

            }?>


</body>
</html>