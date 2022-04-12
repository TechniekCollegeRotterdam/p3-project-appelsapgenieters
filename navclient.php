<nav>
     <ul>	
         <li>
             <a href="klantpagina.php">Home</a>
         </li>	
         <li>
             Bedrijf
             <ul>
                 <li><a href="histdoel.php">Historie</a></li>
                 <li><a href="histdoel.php#doelst">Doelstelling</a></li>
                 <li><a href="medewerkers.php">Medewerkers</a></li>
                 <li><a href="contact.php">Contactinfo</a></li>
             </ul>
         </li>
         <li>
             Informatie
             <ul>
             <li><a href="ovzklantcl.php">Klanten</a></li>
                 <li><a href="ovzcategorie.php">Categorie</a></li>
                 <li><a href="ovzbestellingcl.php">Bestelling</a></li>
                 <li><a href="ovzproductcl.php">Product</a></li>
             </ul>
         </li>						
         <li>
             Producten
             <ul>
                 <li><a href="categorie.php">Categorieën</a></li>
                 <li><a href="producten.php">Producten</a></li>
                 <li><a href="zoek.php">Zoekfuncties</a></li>
             </ul>
         </li>						
         <li>
             Uw mening
             <ul>
                 <li><a href="revwebsite.php">Website</a></li>
                 <li><a href="revklantvriend.php">Klantvriendelijkheid</a></li>
                 <li><a href="revproduct.php">Producten</a></li>
                 <li><a href="revbereikbaar.php">Bereikbaarheid</a></li>
             </ul>
         </li>
         <li class="fortextcolor">
         <?php 
          if(isset($_SESSION["cl-login"]) )
             {
 /* This is a php statement that is executed when the page is loaded. It is used to display the name of
 the user. */

 echo "<strong class='fortextcolor'>".$_SESSION["givenname"]." ".$_SESSION["surname"]."</strong>";
             }?>
                         <ul>
                             <li class='fortextcolor'><a href="eigengegevensclient.php">Eigen gegevens</a></li>
                         </ul>
                         <ul>
                             <li class='fortextcolor'><a href="bestellingenclient.php">Bestellingen</a>
                         </ul>
                         <ul>
                             <li class='fortextcolor'><a href="">Bestel Historie</a>
                         </ul>
                         <ul>
                             <li class='fortextcolor'><a href="producten.php">Producten</a>
                         </ul>
                         <ul>
                             <li class='fortextcolor'><a href="">Producten verwijderen</a>
                         </ul>
                         <ul>
                             <li class='fortextcolor'><a href="">Wachtwoord</a>
                         </ul>
                         <ul>
                             <li class='fortextcolor'><a href="logout.php">Uitloggen</a></li>

                         </ul>
                         </li>
 </nav> 