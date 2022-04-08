<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php
require 'dbconnect.php';
if(isset($_POST['login']))
{
    try{
        $sQuery = "SELECT * FROM client WHERE clientid = :clientid";
        $oStmt = $db->prepare($sQuery);
        $oStmt->bindvalue('clientid', $_POST['klnr']);
        $oStmt->execute();
        if($oStmt->rowcount()==1)
            $row = $oStmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($_POST['klww'],$row['wachtwoord']))
        {
            $_SESSION['clientid']=$row['clientid'];
            $_SESSION['clientid']=$row['clientid'];
            $_SESSION['clientid']=$row['clientid'];
            $_SESSION['clientid']=$row['clientid'];
            if($row['beheer']=="J")
            {
                $_SESSION['blogin']= true;
                header('Refresh: 3; url= index.php');
                echo "Login succesvol";

            }
            else
            {
                $_SESSION['clogin'] = true;
                header('Refresh: 3; url=');
                echo "Login succesvol";

            }
        }

    }
}

?>


</body>
</html>