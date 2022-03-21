<nav>
    <ul>	
        <li>
            <a href="beheerderpagina.php">Home</a>
            <ul>
            <li><a href="">Toevoegen/aanpassen</a></li>
        </ul>
        </li>	
        <li>
            Bedrijf
            <ul>
                <li><a href="histdoel.php">Historie</a></li>
                <li><a href="histdoel.php#doelst">Doelstelling</a></li>
                <li><a href="medewerkers.php">Medewerkers</a></li>
                <li><a href="contact.php">Contactinfo</a></li>
                <li><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>
        <li>
            Informatie
            <ul>
                <li><a href="ovzklant.php">Klant</a></li>
                <li><a href="ovzcategorie.php">Categorie</a></li>
                <li><a href="ovzbestelling.php">Bestelling</a></li>
                <li><a href="ovzproduct.php">Product</a></li>
                <li><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>						
        <li>
            Producten
            <ul>
                <li><a href="categorie.php">Categorieën</a></li>
                <li><a href="producten.php">Producten</a></li>
                <li><a href="zoek.php">Zoekfuncties</a></li>
                <li><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>						
        <li>
            Uw mening
            <ul>
                <li><a href="revwebsite.php">Website</a></li>
                <li><a href="revklantvriend.php">Klantvriendelijkheid</a></li>
                <li><a href="revproduct.php">Producten</a></li>
                <li><a href="revbereikbaar.php">Bereikbaarheid</a></li>
                <li><a href="">Toevoegen/aanpassen</a></li>
            </ul>
        </li>
        <li>
            Aanmelden
            <ul>
                <li><a href="logout.php">Uitloggen</a></li>
            </ul>
        </li>

    <li>
        Uw gegevens
        <ul>
            <li><?php if(isset($_SESSION["loginadmin"]) && $_SESSION["loginadmin"])
            {
/* This is a php statement that is executed when the page is loaded. It is used to display the name of
the user. */
                echo "<li>"$_SESSION["givenName"]." ".["surname"]."</li>";
            }?>
            </li>
        </ul>
    </li>
</nav>
