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
     if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
 {
 	header('Refresh: 0; url=inlogklant.php?error=U moet eerst inloggen!');
 exit();
 } ?>
 <br>
 <br>
 <?php 
 include 'dbconnect.php';
          if(isset($_SESSION["bh-login"]) )
             {
 /* This is a php statement that is executed when the page is loaded. It is used to display the name of
 the user. */
     echo "<fieldset>";
     echo"<legend>Uw Gegevens</legend>";
     echo "<h2>Volledige naam</h2>";
     echo "<strong>".$_SESSION["givenname"]." ".$_SESSION["surname"]."</strong>";
     echo "<br>";
     echo "<br>";
     echo "<h2>Uw klantID</h2>";
     echo "<strong>".$_SESSION["idclient"]."</strong>";
     echo "</fieldset>";

             }?>


 </body>
 </html> 