<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Alle beheerders</title>
</head>
<body>
    <header>
		<h1>Company</h1>
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

    <main>

    <?php
                require_once ("dbconnect.php"); 
            $query = $db->prepare("SELECT * FROM purchase");
            $query->execute();
    //        var_dump($query);
            $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

   /* This is checking if the user has clicked the delete button. */

   if(isset($_POST["verwijderen"])){

    echo "<form method='POST' action='bestellingenprocesV.php'>"; 
    echo "<div class='container'>";
    echo "<div class='panel panel-primary'>";
    echo "<div class='panel-heading'>Weet u het zeker?</div>";
    echo "<div class='panel-body'>";
    echo "<input type='submit' name='Ja' class='admindelete' value='Ja'></input>";     
    echo "<input type='submit' name='Nee' class='admindelete' value='Nee'></input>"; 
    echo "</div>";
    echo "</div>";
    echo "</div>";
                
    if(isset($_POST['Ja'])){
            if($query->rowCount() > 0){
                echo "<table>";
                echo "<thead>";
                echo "<th>id bestelling</th><th>Besteldatum</th><th>Totale bedrag</th><th>Bedrag datum</th><th>Besteldatum</th><th>Klant ID</th><th>Verwijderen</th>";
                echo "</thead><tbody>";
                foreach($resultq as $data) {
                    echo "<form method='POST' action='bestellingenprocesV.php'>"; 
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
                    echo"</td>";
                    echo "</tr></form>";
                    header('Refresh: 3; url=bestellingenprocesV.php');
                  }  
                  echo "</tbody></table>";
            }
            else {
                echo "<h2>Helaas .... geen resultaten gevonden</h2>";
            }     
        } 


        if(isset($_POST["Nee"])){
            header('Refresh: 3; url=bestellingenadmin.php');
        }
    }
   
    ?>
    </main>
</body>
</html>