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
include 'navadmin.php';
$errorfree = true;
echo "<br><main>";
if(! isset($_POST['verander']))
{
    $errorfree = false;
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'><br><br>Helaas, product toevoegen niet gelukt</div>";
    echo "<div class='panel-body'><br>U zult eerst (al) de productgegevens moeten invullen</div>";
    echo "</div>";
    echo "</div>";
    exit();
}


if($errorfree)
{
    require_once "dbconnect.php";
    $idc = filter_var($_POST["idclient"], FILTER_SANITIZE_STRING);
    $query = $db->prepare("SELECT * FROM client WHERE idclient = :idc");
    $query->bindValue(':idc', $idc);
    $query->execute();
    if($query->rowCount()==1)
    {
        $errorfree = false;
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, product toevoegen niet gelukt</div>";
        echo "<div class='panel-body'><br>U zult eerst (al) de productgegevens moeten invullen</div>";
        echo "</div>";
        echo "</div>";
    }
}

if($errorfree)
{
    try
    {


        $query = $db->prepare("UPDATE client SET admn = :admn
         WHERE idclient= :idc");
      $query->bindValue(':idc', $_POST['idclient']);
      $query->bindValue(':admn', $_POST['admn']);
         $query->execute();
         echo "<div class='container'>";
         echo "<div class='panel panel-primary'>";
         echo "<div class='panel-heading'><br><br>Product toevoegen is succesvol</div>";
         echo "<div class='panel-body'><br>Uw heeft een nieuw product toegevoegd.</div>";
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