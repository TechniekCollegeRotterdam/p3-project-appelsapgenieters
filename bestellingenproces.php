<!DOCTYPE html>
 <html lang="nl">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="company.css">  
     <title>Alle beheerders</title>
 </head>
 <body>
     <header>
 		<h1>Company</h1>
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
 	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
 exit();
 } ?>
     <main>

     <?php

    /* This is checking if the user has clicked the delete button. */
         if(isset($_POST["verwijderen"]))
         {               
             require_once ("dbconnect.php"); 
             $query = $db->prepare("DELETE FROM purchase WHERE idpurchase = :cidpurchase");
             $query->bindValue(':cidpurchase', $_POST["idpurchase"]);
             $query->execute();
             $result = ($db);
             $result=$query->fetch(PDO::FETCH_ASSOC);
             echo "<div class='container'>";
             echo "<div class='panel panel-primary'>";
             echo "<div class='panel-heading'>Verwijderen is succesvol</div>";
             echo "<div class='panel-body'>U gaat over 3 seconden naar de bestel pagina.</div>";
             echo "</div>";
             echo "</div>";
             header('Refresh: 3; url=bestellingenadmin.php');
         }

         else{
             echo "<div class='container'>";
             echo "<div class='panel panel-primary'>";
             echo "<div class='panel-heading'>Helaas</div>";
             echo "<div class='panel-body'>Verwijderen mislukt.</div>";
             echo "</div>";
             echo "</div>";
             header('Refresh: 3; url=bestellingenadmin.php');   
         }
     ?>
     </main>
 </body>
 </html> 