<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welkom</title>
</head>
<body>
     
<?php 
session_start();

if (isset($_SESSION['idclient']) && isset($_SESSION['email'])) {
     $query = $db->prepare("INSERT INTO client(surname, givenname, middleinitial,
     title, gender, streetadress, city, zipcode, countryid, emailadress, telephonenumber,
     birthday, occupation, passwrd)
     VALUES (:surname, :givenname, :middleinitial, :title, :gender, :streetadress, :city,
     :zipcode, :countryid, :emailadress, :telephonenumber, :birthday, :occupation, :passwrd)");
     $query->bindValue(':surname', $sn);
     $query->bindValue(':givenname', $gn);
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
     $query->execute();
     echo "Welkom ".$gn." ".$sn."";
     header("Location: beheerpagina.php");
}else{
     echo "Helaas, inloggen niet gelukt.";
     header("Location: inlogbeheer.php");
     exit();
}
 ?>
 </body>
</html>