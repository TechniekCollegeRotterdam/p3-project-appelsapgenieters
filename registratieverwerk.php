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
        "INSERT INTO klantreg (givenname, ) VALUES(:givenname,)"
        $query->bindValue(':voornaam', $_POST['voornaam']);
        
    } else{
        echo "wachtwoord 1 is niet gelijk aan wachtwoord2.";
    
} 

}    else{
     echo "U zult eerst uw gegevens moeten invullen.";
       
}
?>

<h1>Beste <?php ?>, uw registratie is succesvol</h1>
<?php echo 'Klantnummer is '.$db->lastInsertId() ?>