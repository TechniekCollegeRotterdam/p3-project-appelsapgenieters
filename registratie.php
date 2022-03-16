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
        require_once "dbconnect.php";
		include "nav.html";
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

    <label class="label">Voornaam*</label><br><br>
    <input required type="text" name="givenname" value="">
    <br><br>

    <label class="label">Achternaam*</label><br><br>
    <input required type="text" name="surname" value="">
    <br><br>

    <label class="label">Tussenvoegsel</label><br><br>
    <input type="text" name="middleinitial" value="">
    <br><br>

    <label class="label">Titel</label><br><br>
    <input type="text" name="title" value="">
    <br><br>

    <label class="label">Geslacht*</label><br><br>
    <br>
    <label class="container">
    <input required type="radio" name="gender" checked="checked" value="">man
    </label>
    <br>
    <label class="container">
    <input required type="radio" name="gender" checked="checked" value="">vrouw
    </label>
    <br>
    <label class="container">
    <input required type="radio" name="gender" checked="checked" value="">anders
    </label>
    <br><br>
    <label class="label">Straatadres*</label><br><br>
    <input type="text" name="streetadress" value="">
    <br><br>

    <label class="label">Stad*</label><br><br>
    <input required type="text" name="city" value="">
    <br><br>

    <label class="label">Postcode*</label><br><br>
    <input required type="text" name="zipcode" value="">
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
    </select> <br><br>

    <label class="label">E-mail*</label><br><br>
    <input required type="email" name="emailadress" value="">
    <br><br>

    <label class="label">Telefoonnummer*</label><br><br>
    <input required type="phone" name="telephonenumber" value="">
    <br><br>

        <label class="label">Geboortedatum*</label><br><br>
        <input type="date" name="birthday"></input>
        <br><br>

        <label class="label">beroep*</label><br><br>
        <input type="text" name="occupation"></input>
        <br><br>

        <label class="label">Wachtwoord*</label><br><br>
    <input required type="PASSWORD" name="password1" value="">
    <br><br>

    <label class="label">Herhaal wachtwoord*</label><br><br>
    <input required type="PASSWORD" name="password2" value="">
        <br>
        <br>

        <input type="submit" class="submit" name="registreer" value="registreren"></input>

    </form>

    
</body>
</html>