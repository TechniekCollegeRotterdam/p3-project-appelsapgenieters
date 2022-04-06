<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Bollinger Champagne special cuvée</title>
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
if(!isset($_SESSION['cl-login']) || $_SESSION['cl-login'] == false)
{
	header('Refresh: 0; url=inlogbeheer.php?error=U moet eerst inloggen!');
exit();
} ?>
        <br>
        <br>
        <h1>Uw bestellingen</h1>
        <p>Hier staat wat u allemaal besteld heeft.</p>
    <br>
        <br>
        <?php
        
        require_once ("dbconnect.php"); 
        $query = $db->prepare("SELECT * FROM purchase WHERE clientid = :clientid");
        $query->bindValue(':clientid', "clientid");
        $query->execute();
//        var_dump($query);
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

        if($query->rowCount() > 0){
            echo "<table>";
            echo "<thead>";
            echo "<th>id bestelling</th><th>Besteldatum</th><th>Totale bedrag</th><th>Bedrag datum</th><th>Besteldatum</th><th>Klant ID</th>";
            echo "</thead><tbody>";
            foreach($resultq as $data) {
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
                echo "</tr>";

            }
              echo "</tbody></table>";
        }
        else {
            echo "<h2>U heeft nog niks besteld.</h2>";
        }
        ?>

    </body>
    </html>