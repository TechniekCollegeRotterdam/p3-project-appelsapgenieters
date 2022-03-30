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
    <body>
    <?php			
if(!isset($_SESSION['bh-login']) || $_SESSION['bh-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
} ?>
        <br>
        <br>
        <h1>Bestellingen</h1>
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
            echo "<th>id bestelling</th><th>Besteldatum</th><th>Totale bedrag</th><th>Bedrag datum</th><th>Besteldatum</th><th>Klant ID</th><th>Verwijderen</th>";
            echo "</thead><tbody>";
            foreach($resultq as $data) {
                echo "<form action='bestellingenproces.php' method='POST'>";
                echo "<tr>";
                echo "<td>";
                echo "" . $data['idpurchase'];
                echo "</td>";
                echo "<td>";
                echo "" . $data['purchasedate'];
                echo "</td>";
                echo "<td>";
                echo "<p>€" . $data['paidamount'];
                echo "</p>";
                echo "</td>";
                echo "<td>";
                echo "" . $data['paidinfulldate'];
                echo "</td>";
                echo "<td>";
                echo "" . $data['deliverydate'];
                echo "</td>";
                echo "<td>";
                echo "" . $data['clientid'];
                echo "</td>";
                echo"<td>";
                echo"<input type='submit' name='verwijderen' class='admindelete' value='Verwijderen'></input>";
            
                echo"</td>";
                echo "</tr></form>";
              }
              echo "</tbody></table>";
        }
        else {
            echo "<h2>Helaas .... geen resultaten gevonden</h2>";
        }
        ?>

    </body>
    </html>