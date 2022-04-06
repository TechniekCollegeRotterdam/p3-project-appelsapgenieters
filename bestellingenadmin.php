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

        <br>
        <br>
        <h1>Bestellingen verwijderen</h1>
        <p>Verwijder hier de bestellingen van de klanten.</p>
    <br>
        <br>
        <?php
              
      require_once ("dbconnect.php"); 
        $query = $db->prepare("SELECT * FROM purchase");
        $query->execute();
//        var_dump($query);
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

        
        if($query->rowCount() > 0){
            echo "<table>";
            echo "<thead>";
            echo "<th>id bestelling</th><th>Besteldatum</th><th>Totale bedrag</th><th>Bedrag datum</th><th>Besteldatum</th><th>Klant ID</th><th>Beheren</th>";
            echo "</thead><tbody>";
            foreach($resultq as $data) {
                echo "<form action='bestellingenprocesV.php' method='POST'>";
                echo "<tr>";
                echo "<td>";
                echo "" . $data['idpurchase']."<input type='hidden' name='idpurchase' value =".$data["idpurchase"]."></td>";
                echo "<td>";
                echo "" . $data['purchasedate']."<input type='hidden' name='purchasedate' value =".$data["purchasedate"]."></td>";
                echo "</td>";
                echo "<td>";
                echo "<p>€" . $data['paidamount']."<input type='hidden' name='paidamount' value =".$data["paidamount"]."></td>";
                echo "</p>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['paidinfulldate']."<input type='hidden' name='paidinfulldate' value =".$data["paidinfulldate"]."></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['deliverydate']."<input type='hidden' name='deliverydate' value =".$data["deliverydate"]."></td>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['clientid']."<input type='hidden' name='clientid' value =".$data["clientid"]."></td>";
                echo "</td>";
                echo"<td>";
                echo"<input type='submit' name='verwijderen' class='admindelete' value='Verwijderen'></input>";       
                echo "</form>";
                echo "<form action='bestellingenwijzigen.php' method='POST'>";
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