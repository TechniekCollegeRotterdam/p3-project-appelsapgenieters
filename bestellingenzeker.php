<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="company.css">  
    <title>Zekerweten</title>
</head>
<body>
    <header>
		<h1>Company</h1>
	    <!-- hieronder wordt het menu opgehaald. -->
        <?php
        session_start();

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
            $query = $db->prepare("SELECT * FROM purchase WHERE idpurchase = :purid");
            $query->bindValue(':purid', $_POST["idpurchase"]);
            $query->execute();
    //        var_dump($query);
            $data = $query->fetch(PDO::FETCH_ASSOC);

   /* This is checking if the user has clicked the delete button. */

   if(isset($_POST["verwijderen"])){

    if($query->rowCount() == 1){
        echo "<table>";
        echo "<thead>";
        echo "<th>id bestelling</th><th>Besteldatum</th><th>Totale bedrag</th><th>Bedrag datum</th><th>Besteldatum</th><th>Klant ID</th>";
        echo "</thead><tbody>";
//        foreach($resultq as $data) {
            echo "<form action='bestellingenprocesV.php' method='POST'>";
            echo "<tr>";
            echo "<td>";
           echo "" . $data['idpurchase']."<input type='hidden' name='idpurchase' value ='".$data['idpurchase']."'></td>";
            echo "<td>";
            echo "" . $data['purchasedate']."<input type='hidden' name='purchasedate' value ='".$data["purchasedate"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "<p>€" . $data['paidamount']."<input type='hidden' name='paidamount' value ='".$data["paidamount"]."'></td>";
            echo "</p>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['paidinfulldate']."<input type='hidden' name='paidinfulldate' value ='".$data["paidinfulldate"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['deliverydate']."<input type='hidden' name='deliverydate' value ='".$data["deliverydate"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['clientid']."<input type='hidden' name='clientid' value ='".$data["clientid"]."'></td>";
            echo "</td>";
// This system will check of you really want to delete the purchase.
            echo "<div class='panel-heading'>Weet u het zeker dat u van idpurchase nummer "; 
            echo "<strong>".$data["idpurchase"]."</strong>"; 
            echo " wilt verwijderen?</div>";
            echo "<div class='panel-body'>";
            echo "<input type='submit' name='Ja' class='admindelete' value='Ja'></input>";     
            echo "<input type='submit' name='Nee' class='admindelete' value='Nee'></input>"; 
            echo "</div>";
            echo "<br>";
            echo "</form>";
            echo "</tr>";
        
          echo "</tbody></table>";
                
    if(isset($_POST['Ja'])){
    
                header('Refresh: 3; url=bestellingenprocesV.php');
                  }  

            }
            else {
                echo "<h2>Helaas .... geen resultaten gevonden</h2>";
            }     
        


        if(isset($_POST["Nee"])){
            header('Refresh: 3; url=bestellingenadmin.php');
        }

    }
    
   
    ?>
    </main>
</body>
</html>