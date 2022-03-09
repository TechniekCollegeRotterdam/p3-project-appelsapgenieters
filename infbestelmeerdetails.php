<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemiddelde prijs</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
<header>
        <img src="images/Logo.jpg" alt="logo">
        <!-- hieronder wordt het menu opgehaald. -->
        <?php
			include "nav.html";
		?>
    </header>
<br>
<br>
<h1>Gemiddelde bestellingen minder dan 2 regels</h1>
<?php 
//connection to a db// 
    require_once("dbconnect.php");

    $query = $db->prepare("SELECT * FROM purchaseline WHERE pricecharged < '3'");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    if($query->rowCount() > 0){
        echo "<table>";
        echo "<thead>";
        echo "<th>Idpurchaseline</th><th>Gemiddelde prijs bestellingen €</th>";
        echo "</thead><tbody>";
    foreach($resultq as $data) {
    echo "<tr>";
    echo "<td>"; 
    echo "". $data['idpurchaseline'];
    echo "</td>";
    echo "<td>"; 
    echo "€". $data['pricecharged'];
    echo "</td>";
    echo "</tr>";   
    }
    echo "</tbody></table>";
} else {
    echo "<h2>Helaas geen resultaten gevonden</h2>";
}

?>
    
</body>
</html>