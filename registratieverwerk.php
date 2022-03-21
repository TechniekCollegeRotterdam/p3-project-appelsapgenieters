<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwerk</title>
    <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
	</header>
<!-- This is for the registersystem -->
<?php
include 'navbezoeker.html';
$errorfree = true;
echo "<br><main>";
if(! isset($_POST['registreer']))
{
    $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, registratie is niet gelukt</div>";
    echo "<div class='panel-body'><br>U zult eerst (al) uw gegevens moeten invullen</div>";
    echo "</div>";
    echo "</div>";
    exit();
}

if($errorfree && $_POST['password1']!==$_POST['password2'])
{
    $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, registratie is niet gelukt</div>";
    echo "<div class='panel-body'><br>de beide wachtwoorden moeten aan elkaar gelijk zijn</div>";
    echo "</div>";
    echo "</div>";
}

if($errorfree)
{
    require_once "dbconnect.php";
    $eml = filter_var($_POST["emailadress"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM client WHERE emailadress = :eml");
    $query->bindValue(':eml', $eml);
    $query->execute();
    if($query->rowCount()<>0)
    {
        $errorfree = false;
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, registratie is niet gelukt</div>";
        echo "<div class='panel-body'><br>Het gekozen email-adres is al in gebruik.</div>";
        echo "</div>";
        echo "</div>";
    }
}

if($errorfree)
{
    try
    {
        $sn = filter_var($_POST["surname"], FILTER_SANITIZE_STRING);
        $gn = filter_var($_POST["givenname"], FILTER_SANITIZE_STRING);
        $initl = filter_var($_POST["middleinitial"], FILTER_SANITIZE_STRING);
        $ttl = filter_var($_POST["title"], FILTER_SANITIZE_STRING);
        // veld "gender" hoeft niet geschoond te worden, omdat waarde door formulier wordt gevuld
        $stradr = filter_var($_POST["streetadress"], FILTER_SANITIZE_STRING);
        $cty = filter_var($_POST["city"], FILTER_SANITIZE_STRING);
        $zip = filter_var($_POST["zipcode"], FILTER_SANITIZE_STRING);
        // veld "country" hoeft niet geschoond te worden, waarde wordt gevuld door formulier
        // veld "emailaddress" is al geschoond hiervoor
        $phone = filter_var($_POST["telephonenumber"], FILTER_SANITIZE_STRING);
        // veld "birthday" hoeft niet geschoond te worden, want het komt uit het formulier
        $occ = filter_var($_POST["occupation"], FILTER_SANITIZE_STRING);

        $pw=password_hash($_POST["password1"], PASSWORD_DEFAULT);

        $query = $db->prepare("INSERT INTO client(surname, givenname, middleinitial,
         title, gender, streetadress, city, zipcode, countryid, emailadress, telephonenumber,
         birthday, occupation, passwrd, admin)
         VALUES (:surname, :givenname, :middleinitial, :title, :gender, :streetadress, :city,
         :zipcode, :countryid, :emailadress, :telephonenumber, :birthday, :occupation, :passwrd, :admin)");
         $query->bindValue(':givenname', $gn);
         $query->bindValue(':surname', $sn);
         $query->bindValue(':middleinitial', $initl);
         $query->bindValue(':title', $ttl);
         $query->bindValue(':gender', $_POST['gender']);
         $query->bindValue(':streetadress', $stradr);
         $query->bindValue(':city', $cty);
         $query->bindValue(':zipcode', $zip);
         $query->bindValue(':countryid', $_POST['country']);
         $query->bindValue(':emailadress', $eml);
         $query->bindValue(':telephonenumber', $phone);
         $query->bindValue(':birthday', $_POST['birthday']);
         $query->bindValue(':occupation', $occ);
         $query->bindValue(':passwrd', $pw);
         $query->bindValue(':admin', $am);
         $query->execute();
         echo "<div class='container'>";
         echo "<div class='panel panel-primary'>";
         echo "<div class='panel-heading'><br><br>Beste ".$gn." ".$sn.", uw registratie is succesvol</div>";
         echo "<div class='panel-body'><br>Uw klantnummer is: ".$db->lastInsertId()."</div>";
         echo "</div>";
         echo "</div>";
    }
    catch(PDOException $e)
    {
        $sMsg = '<p>
        Regelnummer: '.$e->getLine().'<br />
        Bestand: '.$e->getFile().'<br />
        Foutmelding: '.$e->getMessage().'
        </p>';
        trigger_error($sMsg);
}
}
?>

</main>
</body>
</html>


