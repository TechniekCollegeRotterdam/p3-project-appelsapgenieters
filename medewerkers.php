<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onze Mederwerkers</title>
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
    <main>
    <h1>Onze mederwerkers</h1>
        <section>
            <article>
    <p>Natuurlijk moeten we mederwerkers hebben om te kunnen werken.<br>
       We hebben hier ook iedereen uit verschillende leeftijden.</p>
       <table>
           <tr>
               <td>
        <img src="images/Toad.jpg" alt="Medewerker" width="200" height="200">
        <p class="color"><strong>Toad</strong><br>
        is een werknemer. Hij had geen zin meer om ee werkgever te zijn,<br>
         dus daarom is iemand anders de werkgever.<br>
        Toad importeerd de dranken en hij is ook tegelijkertijd de proever van de dranken,<br>
        want hij moet proeven of het wel goed is en hij houdt ook van drinken(vooral alcohol).</p>
        </td>
        <td>
        <img src="images/Toadny kopiëren.jpg" alt="Medewerker" width="200" height="200">
        <p><strong>Toadny</strong><br>
         is ook een werknemer. Hij importeerd alle producten en verzin ook de prijs<br>
        hoe duur een product moet zijn. Hij drinkt geen alcohol en is goed met verkopen en importeren van producten.</p>
        </td>
        <td>       
       <img src="images/Among-Us-Logo.jpg" alt="Werkgever" width="200" height="200">
        <p><strong>Among us</strong><br>
        is erg sus. Daarom is hij de nieuwe werkgever. Hij bepaalt in welk tijd de producten geïmporteerd wordt,<br>
        welke bedragen het opleverd en hoeveel tijd het kost. Hij is erg slim en goed in inversteren, maar hij is ook een beetje gierig.</p>
        </td>
</tr>
</table>

<table>
        <td>       
       <img src="images/SkeletonsCard.jpg" alt="Medewerker" width="200" height="200">
        <p><strong>Larry</strong><br>
        is een werknemer. Hij houdt erg van dranken, dus daarom werkt hij op dit bedrijf.<br>
        Het is onbekend hoe hij dranken drinkt en hou hij het verteerd. Hij is ook heel aardig en doet ook zijn best tijdens werk.</p>
        </td>
        <td>       
       <img src="images/UsainBolt.jpg" alt="Medewerker" width="200" height="200">
        <p><strong">Usain Bolt</strong><br>
        is een werknemer die helpt met onze reclame. Hij drinkt vaak appelsap,<br>
        want het geeft de grootste boost waar je sneller loopt dan de snelste auto.<br>
        Usain Bolt heeft ook een Pokémon gevangen waar 
        </td>
        <td>       
       <img src="images/snorlaxappelsap.jpg" alt="Medewerker" width="300" height="300">
        <p><strong>Snorlax</strong><br>
        is een werknemer die ook mee helpt met onze reclame. Hij drinkt veel te veel appelsap<br>
        en daarom ligt die op een plek lekker rustig appelsap te drinken.<br> 
        Hij helpt ook met importeren en het exporteren van producten.
        </td>
        </tr>
        </table>                 
       </article>
       </section>
       </main>
</body>
</html>