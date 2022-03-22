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
<br>
<br>
<?php 
include 'dbconnect.php';
         if(isset($_SESSION["bh-login"]) )
            {
/* This is a php statement that is executed when the page is loaded. It is used to display the name of
the user. */
    echo "<fieldset>";
    echo "<h2>Volledige naam</h2>";
    echo "<strong>".$_SESSION["title"]." ".$_SESSION["givenname"]." ".$_SESSION["surname"]."</strong>";
    echo"<h2>Email</h2>";
    echo "<strong>".$_SESSION["emailadress"]." </strong>";
    echo"<h2>Geboortedatum</h2>";
    echo "<strong>".$_SESSION["birthday"]." </strong>";
    echo"<h2>Woonplaats</h2>";
    echo "<strong>".$_SESSION["streetadress"]." ".$_SESSION["zipcode"]."<br>".$_SESSION["city"]."</strong>";
    echo "</fieldset>";

            }?>
</body>
</html>