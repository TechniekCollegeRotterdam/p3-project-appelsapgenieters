<!DOCTYPE html>
 <html lang="nl"> 
 <head>
 	 <meta charset="UTF-8">
 	 <title>Beheerder maker</title>
 	 <link rel="stylesheet" type="text/css" href="company.css">  
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
 if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
 {
 	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
 exit();
 } ?>


 	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
  	<main>	
         <h1>Klanten naar beheerder</h1>
         <p>Kies hier klanten uit wie u beheerder wilt maken.</p>
                         <?php 
                         require_once ("dbconnect.php"); 
                         $query = $db->prepare("SELECT * FROM client WHERE admn like '%N%'");
                         $query->execute();
                 //        var_dump($query);
                         $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

                         if($query->rowCount() > 0){
                             echo "<form method='POST' action='beheerderverwerk.php'>";
                             echo "<table>";
                             echo "<thead>";
                             echo "<th>Beheerder maken</th><th>id</th><th>Voornaam</th><th>Achternaam</th><th>Tussenvoegsel</th><th>Titel</th><th>Geslacht</th><th>Straatadres</th><th>Stad</th><th>Postcode</th><th>Land id</th><th>Emailadres</th><th>Telefoonnummer</th><th>Geboortedatum</th><th>Beroep</th><th>Beheerder</th>";
                             echo "</thead><tbody>";
                             foreach($resultq as $data) {
                                 echo "<tr>";
                                 echo "<td>";
                                 echo "<label> Rol:</label>
                                 <input type='radio' name='admn' id='admin' value='J' checked>
                                 <br><br>";
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['idclient'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['givenname'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['surname'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['middleinitial'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['title'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['gender'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['streetadress'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['city'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['zipcode'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['countryid'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['emailadress'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['telephonenumber'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['birthday'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['occupation'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo "" . $data['admn'];
                                 echo "</td>";
                                 echo "</tr>";
                               }
                               echo "</tbody></table>";
                         }
                         else {
                             echo "<h2>Helaas .... geen resultaten gevonden</h2>";
                         }
                 ?>

         <fieldset>
         <input type="submit" class="submit" name="verander" value="veranderen"></input>
         </fieldset>
                     </form>

 	</main>

 </body>
 </html>