<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title> producten lage prijs</title>
</head>
<body>
    <header>
		<h1>Company</h1>
	    <!-- hieronder wordt het menu opgehaald. -->
	    <?php
		    include "nav.html";
	    ?>
	</header>
 
    <main>
    <?php
        // Verbinding maken met de database 
        require_once("dbconnect.php");

        // producten onder de $5
        $query = $db->prepare("SELECT type.name, proddesc, stockquantity, price
                        FROM type
                        INNER JOIN product ON idtype = typeid
                        WHERE price < 5");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Type naam</th><th>Product omschrijving</th><th>Voorraad</th><th> Prijs </th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm tonen
        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["proddesc"]."</td>";
            echo "<td>".$data["stockquantity"]."</td>";
            echo "<td>".$data["price"]."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>