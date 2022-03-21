<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
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

        require_once "dbconnect.php";
        // Hier worden de gegevens van de landentabel opgehaald voor het formulier
        $query = $db->prepare("SELECT * FROM country");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);

		?>
        
	</header>

    <br>
    <br>
    <br>
    <!-- This is for the registerfield in html -->
    <h1>Registreren</h1>
    <form method="POST" action="registratieverwerk.php">
        <fieldset>
            <legend><h2>Klantnummer</h2></legend>
            <input type="text" name="idClient"
            placeholder="Klantnummer wordt automatisch bepaald" disabled>
            
        </fieldset>
<fieldset>
    <label for="givenname">Voornaam*</label><br><br>
    <input type="text" name="givenname" placeholder="voornaam" required autofocus>
  
    <br><br>

    <label for="surname">Achternaam*</label><br><br>
    <input type="text" name="surname" placeholder="achternaam" required>
    <br><br>

    <label for="middleinitial">Overige Initialen</label><br><br>
    <input type="text" name="middleinitial" placeholder="Overige Initialen">
    <br><br>

    <label for="title">Titel</label><br><br>
    <input type="text" name="title" placeholder="Titel">
    <br><br>
    </fieldset>

    <fieldset>
    <legend>Geslacht*</legend><br><br>
    <label for="female"> Vrouw:</label>
    <input type="radio" name="gender" id="female" value="female" checked>
    <br><br>
    <label for="male"> &nbsp; &nbsp; &nbsp; &nbsp;  Man:</label>
    <input type="radio" name="gender" id="male" value="male" checked>
    <br><br>
    <label for="other">&nbsp; &nbsp; &nbsp; &nbsp; Anders:</label>
    <input type="radio" name="gender" id="other" value="other" checked>
    </fieldset>
    <br><br>

    <fieldset>
    <label for="streetadres">Straatadres*</label><br><br>
    <input type="text" name="streetadress" placeholder="Adres" required>
    <br><br>

    <label for="city">Stad*</label><br><br>
    <input required type="text" name="city" placeholder="Woonplaats" required>
    <br><br>

    <label for="zipcode">Postcode*</label><br><br>
    <input type="text" name="zipcode" placeholder="Postcode" required>
    <br><br>

    <label for="country">Selecteer uw land:</label> 
    <select class="form-control" id="country" name="country" required>
        <?php
        foreach($result as $rij)
        {
            echo '<option value="'.$rij['idcountry'].'">';
            echo $rij['code'].' - '.$rij['name'];
            echo '</option>';
        }
        ?>
    </select>
    </fieldset>
     <br><br>

     <fieldset>
    <label for="emailadress">E-mail*</label><br><br>
    <input required type="email" name="emailadress" placeholder="Email" required>
    <br><br>

    <label for="telephonenumber">Telefoonnummer*</label><br><br>
    <input required type="phone" name="telephonenumber" placeholder="Telefoonnummer" required>
    <br><br>

        <label for="birthday">Geboortedatum*</label><br><br>
        <input type="date" name="birthday"></input>
        <br><br>

        <label for="occupation">beroep*</label><br><br>
        <input type="text" name="occupation" placeholder="Beroep"></input>
        <br><br>

        <label for="password1">Wachtwoord*</label><br><br>
    <input type="PASSWORD" name="password1" placeholder="Wachtwoord" required>
    <br><br>

    <label for="password2">Herhaal wachtwoord*</label><br><br>
    <input type="PASSWORD" name="password2" placeholder="Herhaal wachtwoord" required>
        <br>
        <br>
        </fieldset>

        <fieldset>
        <label for="admin">Rol</label><br><br>
        <input name="admin" 
         placeholder="U wordt automatisch naar klanten gezet." disabled></input>
        <br><br>
        </fieldset>

        <fieldset>
        <input type="submit" class="submit" name="registreer" value="registreren"></input>
        </fieldset>
    </form>

    
</body>
</html>