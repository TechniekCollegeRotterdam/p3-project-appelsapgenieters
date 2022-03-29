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
session_start();
$errorfree = true;
echo "<br><main>";
if(! isset($_POST['verander']))
{
    $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, pindekaas</div>";
    echo "<div class='panel-body'><br>Klant naar beheerder mislukt.</div>";
    echo "</div>";
    echo "</div>";
    exit();
}
if($errorfree){
    require 'dbconnect.php';
    require_once "dbconnect.php";
    $admn = filter_var($_POST["admn"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM client WHERE admn = :admn");
    $query->bindValue(':admn', $admn);
    $query->execute();
    $result = ($db);

    if(empty($admn)){
        $errorfree = false;
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, pindekaas</div>";
        echo "<div class='panel-body'><br>Klant naar beheerder mislukt.</div>";
        echo "</div>";
        echo "</div>";
        exit();   
    }
    else ($query->rowCount() == 1) {
        $result=$query->fetch(PDO::FETCH_ASSOC);

 if($result['admn']=="N"){
    $_SESSION['idclient'] = $result['idclient'];
    $_SESSION['givenname'] = $result['givenname'];
    $_SESSION['surname'] = $result['surname'];
    $_SESSION['middleinitial'] = $result['middleinitial'];
    $_SESSION['title'] = $result['title'];
    $_SESSION['gender'] = $result['gender'];
    $_SESSION['streetadress'] = $result['streetadress'];
    $_SESSION['city'] = $result['city'];
    $_SESSION['zipcode'] = $result['zipcode'];
    $_SESSION['countryid'] = $result['countryid'];
    $_SESSION['emailadress'] = $result['emailadress'];
    $_SESSION['telephonenumber'] = $result['telephonenumber'];
    $_SESSION['birthday'] = $result['birthday'];
    $_SESSION['occupation'] = $result['occupation'];
    $_SESSION['passwrd'] = $result['passwrd'];
    $_SESSION['admn'] = $result['admn'];

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
             birthday, occupation, passwrd, admn)
             VALUES (:surname, :givenname, :middleinitial, :title, :gender, :streetadress, :city,
             :zipcode, :countryid, :emailadress, :telephonenumber, :birthday, :occupation, :passwrd, :admn)");
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
             $query->bindValue(':admn', $_POST['admn']);
             $query->execute();
             echo "<div class='container'>";
             echo "<div class='panel panel-primary'>";
             echo "<div class='panel-heading'><br><br>Beste ".$gn." </div>";
             echo "<div class='panel-body'><br>Uw heeft een klant naar beheerder veranderd."."</div>";
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
    else{
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, pindakaas</div>";
        echo "<div class='panel-body'><br>Klant naar beheerder mislukt.</div>";
        echo "</div>";
        echo "</div>";
        exit();
    }
}
}

?>