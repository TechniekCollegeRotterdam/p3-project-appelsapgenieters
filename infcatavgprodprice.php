<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Gemiddelde productprijs</title>
</head>
<body> 
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
        <?php
        session_start();
        if(isset($_SESSION["bh-login"]))
        {
            include "navadmin.php";
        } elseif(isset($_SESSION["cl-login"]))
        {
            include "navclient.php";
        } else
			include "navbezoeker.html";
		?>
	</header>
 
    <main>
    <?php
        // Verbinding maken met de database.
        require_once("dbconnect.php");

        // Geselecteerde gegevens ophalen uit de tabel type en gemiddelde productprijs.
        $query = $db->prepare("SELECT idtype, type.name, AVG(price) as 'avgprice'
                        FROM type
                        INNER JOIN product ON idtype = typeid
                        GROUP BY idtype
                        ORDER BY avgprice DESC");
        $query->execute();
        $resultq = $query->fetchAll(PDO::FETCH_ASSOC);

        echo "<table>";
        echo "<thead><th>Type nummer</th><th>Type naam</th><th>Gem. prijs product</th></thead>";
        echo "<tbody>";

        // Alle gegevens uit client op het scherm.
        foreach ($resultq as $data) {
            echo "<tr>";
            echo "<td>".$data["idtype"]."</td>";
            echo "<td>".$data["name"]."</td>";
            echo "<td>".round($data["avgprice"], 2)."</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    ?>
    </main>
</body>
</html>