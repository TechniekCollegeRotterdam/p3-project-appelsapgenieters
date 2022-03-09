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
<!-- This is for the clientnumber -->

<?php 

require('dbconnect.php');
session_start();
if(isset($POST["registreer"])){
    /*This is for the phpmyadmin table client*/
    $givenname=$_POST['givenname'];
    $surname=$_POST['surname'];
    $middleinitial=$_POST['middleinitial'];
    $title=$_POST['title'];
    $gender=$_POST['gender'];
    $streetadres=$_POST['streetadres'];
    $city=$_POST['city'];
    $zipcode=$_POST['zipcode'];
    $email=$_POST['email'];
    $telephonenumber=$_POST['telephonenumber'];
    $birthday=$_POST['birthday'];
    $occupation=$_POST['occupation'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    $query = "INSERT into `clients` (givenname, surname, middleinitial, title, gender, streetadres, city,
     zipcode, email, telephonenumber, birthday, occupation, password1, password2)
     VALUES('$givenname', '" . md5($password1) . "" . md5($password2) . "' , '$surname'  , '$middleinitial'  , '$title' , '$gender' , '$streetadres' , '$city' , '$zipcode' , '$email' , '$telephonenumber'  , '$birthday' , '$occupation' , '$password1', '$password2')";
 
 /*Here starts the registersystem*/
    if($_POST['password1']==$_POST['password2']){
        $ww=password_hash($_POST['password1'],
        PASSWORD_DEFAULT);
        "INSERT INTO client; (givenname, ) VALUES(:givenname,)";
        $query->bindValue(':givenname', $_POST['givenname']);
        $query->execute();
        echo"Beste $givenname, uw registratie is succesvol";
        
    } else{
        $givenname="";
        echo "wachtwoord 1 is niet gelijk aan wachtwoord2.";
        header('Refresh: 1; url=registratie.php');	
        exit();
} 

}    else{
    $givenname="";
     echo "U zult eerst uw gegevens moeten invullen.";
     header('Refresh: 1; url=registratie.php');	
       
}
?>

<?php echo 'Klantnummer is'.$db->lastInsertId() ?>
