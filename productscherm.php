<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Bestellingen van de klanten</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
<header>
	<img src="images/Logo.jpg" alt="logo">
		<!-- hieronder wordt het menu opgehaald. -->
        <?php
        session_start();
        include "navadmin.php";


            if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
}
		?>
	</header>
    <body>

        <h1>Bestellingen verwijderen</h1>
        <p>Verwijder hier de bestellingen van de klanten.</p>
    <br>
        <br>
        <?php
              
      require_once ("dbconnect.php"); 
        $query = $db->prepare("SELECT * FROM product");
        $query->execute();
//        var_dump($query);
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

        
        if($query->rowCount() > 0){
            echo "<table>";
            echo "<thead>";
            echo "<th>product id</th><th>type id</th><th>voorraad</th><th>naam afbeelding</th><th>prijs</th><th>naam product</th><th>beschrijving</th>";
            echo "</thead><tbody>";
            foreach($resultq as $data) {
                echo "<form action='prodwijzigen.php' method='POST'>";
                echo "<tr>";
                echo "<td>";
                echo "" . $data['idproduct']."<input type='hidden' name='idproduct' value ='".$data["idproduct"]."' ></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['typeid']."<input type='hidden' name='typeid' value ='".$data["typeid"]."' ></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['stockquantity']."<input type='hidden' name='stockquantity' value =".$data["stockquantity"]."></td>";
                echo "</td>";
                echo "<td>";
                echo "<p>€" . $data['imageref']."<input type='hidden' name='imageref' value =".$data["imageref"]."></td>";
                echo "</p>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['price']."<input type='hidden' name='price' value =".$data["price"]."></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['prodname']."<input type='hidden' name='prodname' value =".$data["prodname"]."></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['proddesc']."<input type='hidden' name='proddesc' value =".$data["proddesc"]."></td>";
                echo "</td>";
                echo"<td>";
                echo"<input type='submit' name='wijzigen' class='adminchange' value='Wijzigen'></input>"; 
                echo "</td>";
                echo "</form>";
                echo "</tr>";
              }
              echo "</tbody></table>";
        }
        else {
            echo "<h2>Helaas .... geen resultaten gevonden</h2>";
        }
        ?>

    </body>
    </html>