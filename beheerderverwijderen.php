<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beheerder verwijderen</title>
    <link rel="stylesheet" href="company.css">
    <?php
	require 'dbconnect.php'; 
    ?>
</head>
<body>
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->

        <?php
        session_start();
/* This is a test to see if the user is logged in. If the user is logged in, the code will continue. If
not, the user will be redirected to the login page. */
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
		try 
		{  
			$query = $db->prepare("SELECT idclient, givenname, surname FROM client); ?>


</body>
</html>