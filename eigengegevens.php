<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigen gegevens</title>
    <link rel="stylesheet" type="text/css" href="company.css">  
</head>
<body>
<?php 
session_start ();
include 'dbconnect.php';
         if(isset($_SESSION["bh-login"]) )
            {
/* This is a php statement that is executed when the page is loaded. It is used to display the name of
the user. */

    echo "<table>";
    echo "<tr>";
echo"<td>";
    echo "<h2>Volledige naam</h2>";
    echo "<strong class='fortextcolor'>".$_SESSION["givenname"]." ".$_SESSION["surname"]."</strong>";
    echo "</td>";
    echo "<br>";
    echo"<td>";
    echo"<h2>Email</h2>";
    echo "<strong class='fortextcolor'>".$_SESSION["city"]." </strong>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
            }?>
</body>
</html>