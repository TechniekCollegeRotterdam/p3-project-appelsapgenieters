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

<?php 


if(isset($POST["registreer"])){

    
    if($_POST['password1']==$_POST['password2']){
        $ww=password_hash($_POST['password1'],PASSWORD_DEFAULT);
        "INSERT INTO"
        echo "Uw klantnummer is 4";
        
    } else{
        echo "wachtwoord 1 is niet gelijk aan wachtwoord2.";
    }

} 
?>