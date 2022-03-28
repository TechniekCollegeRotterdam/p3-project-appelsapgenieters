<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
    

<?php 
session_start();


if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
session_unset();
session_destroy();
header("Refresh: 3; index.php");
echo "<div class='panel-heading'><h1>Loguit succesvol</h1></div>";
exit();
} elseif(!isset($_SESSION['cl-login']) || $_SESSION['cl-login'] == false)
{ 
session_unset();
session_destroy();
    header("Refresh: 3; index.php");
    echo "<div class='panel-heading'><h1>Loguit succesvol</h1></div>";
    exit();  
}
?>
</body>
</html>