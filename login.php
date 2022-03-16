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
session_start(); 
require "dbconnect.php";
if(isset($_POST['submit']))
{
    try
    {
        $sQuery = "SELECT * FROM login WHERE id = :id";
        $oStmt = $db->prepare($sQuery);
        $oStmt->bindValue(':id',$_POST['email']);
        $oStmt->execute();
        if($oStmt-rowCount()==1)
        {
            $rij = $oStmt->fetch(fetch_style: PDO::FETCH_ASSOC);
            if(password_verify($_POST['email'],$rij['password']))
            {
                $_SESSION['email']=$rij['email'];
                $_SESSION['naam']=$rij['naam'];

                if($rij['beheer']=="J"){
                 $_SESSION['bsubmit']= true;
                 header(string:'Refresh: 3; url=index.php');
                 echo "Login succesvol";
                }
                else
                {
                    $_SESSION['ksubmit']=true;
                    header(string:'Refresh: 3; url=index.php');
                    echo "Login succesvol";
                }
            }
            else{
                header(string:'Refresh: 4; url=inlogbeheer.php');
            }
        }
    } catch(PDOException $e) {
        die("  ERROR !!!! :  " . $e->getMessage());
       } 

}

?>

<div class="container">
<div class="panel panel-primary">
<div class="panel-heading">Helaas, login niet succesvol</div>
<div class="panel-body">Deze combinatie van email en wachtwoord is niet gelijk.</div>
</div>
</div>

</body>
</html>