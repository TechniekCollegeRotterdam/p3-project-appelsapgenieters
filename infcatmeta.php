<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title> producten met a</title>
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

        // Geselecteerde gegevens ophalen uit de tabel type en bijbehorende producten met "a" in naam
        $query = $db->prepare("SELECT type.name, prodname, price, stockquantity
                        FROM type
                        INNER JOIN product ON idtype = typeid
                        WHERE prodname LIKE '%a%'");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Type naam</th><th>Product naam</th><th> Prijs </th><th>Voorraad</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm tonen
        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".$data["prodname"]."</td>";
            echo "<td>".$data["price"]."</td>";
            echo "<td>".$data["stockquantity"]."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>