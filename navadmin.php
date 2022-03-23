<nav>
    <ul>	
        <li>
            <a href="beheerderpagina.php">Home</a>
            <ul>
            <li class='fortextcolor'><a href="">Toevoegen/aanpassen</a></li>
        </ul>
        </li>	
        <li>
            Bedrijf
            <ul>
                <li><a href="histdoel.php">Historie</a></li>
                <li><a href="histdoel.php#doelst">Doelstelling</a></li>
                <li><a href="medewerkers.php">Medewerkers</a></li>
                <li><a href="contact.php">Contactinfo</a></li>
                <li class='fortextcolor'><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>
        <li>
            Informatie
            <ul>
                <li><a href="ovzklant.php">Klant</a></li>
                <li><a href="ovzcategorie.php">Categorie</a></li>
                <li><a href="ovzbestelling.php">Bestelling</a></li>
                <li><a href="ovzproduct.php">Product</a></li>
                <li class='fortextcolor'><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>						
        <li>
            Producten
            <ul>
                <li><a href="categorie.php">Categorieën</a></li>
                <li><a href="producten.php">Producten</a></li>
                <li><a href="zoek.php">Zoekfuncties</a></li>
                <li class='fortextcolor'><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>						
        <li>
            Uw mening
            <ul>
                <li><a href="revwebsite.php">Website</a></li>
                <li><a href="revklantvriend.php">Klantvriendelijkheid</a></li>
                <li><a href="revproduct.php">Producten</a></li>
                <li><a href="revbereikbaar.php">Bereikbaarheid</a></li>
                <li class='fortextcolor'><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>
        <li class='fortextcolor'>
  
            <?php 
         if(isset($_SESSION["bh-login"]) )
            {
/* This is a php statement that is executed when the page is loaded. It is used to display the name of
the user. */
    echo "<strong class='fortextcolor'>".$_SESSION["givenname"]." ".$_SESSION["surname"]."</strong>";
            }?>
                        <ul>
                            <li class='fortextcolor'><a href="eigengegevensadmin.php">Eigen gegevens</a></li>
                        </ul>
                        <ul>
                            <li class='fortextcolor'><a href="allebeheerder.php">Alle beheerders</a>
                        </ul>
                        <ul>
                            <li class='fortextcolor'><a href="beheerdermaker.php">Beheerder maker</a>
                        </ul>
                        <ul>
                            <li class='fortextcolor'><a href="">Wachtwoord</a>
                        </ul>
                        <ul>
                            <li class='fortextcolor'><a href="logout.php">Uitloggen</a></li>

                        </ul>
                        </li>
</nav>