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
if(isset($_POST["registreer"])) {
        /*This is for the phpmyadmin table client*/
        $givenname=$_POST['givenname'];
        $surname=$_POST['surname'];
        $middleinitial=$_POST['middleinitial'];
        $title=$_POST['title'];
        $gender=$_POST['gender'];
        $streetadress=$_POST['streetadress'];
        $city=$_POST['city'];
        $zipcode=$_POST['zipcode'];
        $emailadress=$_POST['emailadress'];
        $telephonenumber=$_POST['telephonenumber'];
        $birthday=$_POST['birthday'];
        $occupation=$_POST['occupation'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];


        if($_POST['password1']==$_POST['password2']){
        $ww=password_hash($_POST['password1'], PASSWORD_DEFAULT);
        
        /*This is for the login email. We need it later*/
        require_once 'dbconnect.php';
        $eml = filter_var($_POST["emailadress"], FILTER_SANITIZE_STRING);
        $query = $db->prepare("SELECT * FROM client WHERE emailadress = :eml");
        $query->bindValue(':eml', $eml);
        $query->execute();
        if($query->rowCount()<>0) {
        $query = $db->prepare("INSERT INTO client(givenname, surname, middleinitial, title, gender, streetadress, city, zipcode, emailadress, telephonenumber, birthday, occupation, password1, password2)
        VALUES(':givenname', 'surname', 'middleinitial', 'title', 'gender', 'streetadress', 'city', 'zipcode', 'emailadress', 'telephonenumber', 'birthday', 'occupation', 'password1, password2'");
        $query->bindValue(':givenname', $_POST['givenname']);
        $query->execute();
        echo "U bent succesvol geregistreerd.";
        

        } else{
            echo "Wachtwoord1 en Wachtwoord2 zijn niet aan elkaar gelijk.";
            header('Refresh: 1; url=registratie.php');	
            exit(); 
        }
    } else{
    echo "U zult eerst uw gegevens moeten invullen.";
    header('Refresh: 1; url=registratie.php');	
    exit(); 
}
} 
?>


