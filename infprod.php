<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle producten</title>
    <link rel="stylesheet" href="company.css">
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
        <br>
        <br>
        <h1>Alle producten</h1>
	</header>
<?php
    // verbinding maken database shabu //
    require_once ("dbconnect.php");
    //  alle gegevens ophalen uit de tabel: product
        $query = $db ->prepare("SELECT * FROM product");
        $query-> execute();
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        if ($query ->RowCount()>0) {
            echo "<table>";
            echo	"<thead>";
            echo    "<th>productnummer</th><th>type</th><th>voorraad</th><th>prijs €</th><th>naam</th><th>beschrijving</th>";
            echo   "</thead> <tbody>";


          foreach ($resultq as &$data) {
            echo "<tr>";
            echo "<td>";
            echo "" .$data["idproduct"];
            echo "</td>";
            echo "<td>";
            echo "" .$data["typeid"];
            echo "</td>";
            echo "<td>";
            echo "" .$data["stockquantity"]; 
            echo "</td>";
            echo "<td>";
            echo "" .$data["price"]; 
            echo "</td>";
            echo "<td>";
            echo "" .$data["prodname"]; 
            echo "</td>";
            echo "<td>";
            echo "" .$data["proddesc"]; 
            echo "</td>";
           
        } 
        echo "</tbody></table>";
        } else {
             echo "Helaas niks gevonden.";
         }

    ?>
</body>
</html>