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
			include "nav.html";
		?>
	</header>
    <?php 


    if(isset($POST["registreer"])){
 
        $ww=password_hash($_POST['wachtwoord1'],PASSWORD_DEFAULT);
        
        if($_POST['wachtwoord1']==$_POST['wachtwoord2']){
            echo "Uw klantnummer is 4";
        } else{
            echo "wachtwoord 1 is niet gelijk aan wachtwoord2.";
        }

    } 
    ?>
    <br>
    <br>
    <br>
    <h1>Registreren</h1>
    <form method="POST" action="">

    <label class="label">Voornaam*</label><br><br>
    <input required type="text" name="voornaam" value="">
    <br><br>
    <label class="label">Achternaam*</label><br><br>
    <input required type="text" name="achternaam" value="">
    <br><br>
    <label class="label">Woonplaats*</label><br><br>
    <input required type="text" name="woonplaats" value="">
    <br><br>
    <label class="label">E-mail*</label><br><br>
    <input required type="text" name="email" value="">
    <br><br>
        <label class="label">Geboortedatum*</label><br><br>
        <input type="date" name="geboortedatum"></input>
        <br><br>
        <label class="label">Wachtwoord*</label><br><br>
    <input required type="PASSWORD" name="wachtwoord1" value="">
    <br><br>
    <label class="label">Herhaal wachtwoord*</label><br><br>
    <input required type="PASSWORD" name="wachtwoord2" value="">
        <br>
        <br>
        <input type="submit" class="submit" name="registreer" value="registreren"></input>

    </form>

    
</body>
</html>