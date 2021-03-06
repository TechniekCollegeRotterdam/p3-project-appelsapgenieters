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
                $query = $db->prepare("SELECT * FROM client WHERE admn LIKE '%J%' AND idclient = :id");
                $query->bindValue(':id', $_POST["idclient"]);
                $query->execute();
    //        var_dump($query);
            $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

   /* This is checking if the user has clicked the delete button. */

   if(isset($_POST["verwijderen"])){

    if($query->rowCount() == 1){
        echo "<table hidden>";
        echo "<thead>";
        echo "<th>klant id</th><th>voornaam</th><th>achternaam</th><th>tussenvoegsels</th><th>titel</th><th>geslacht</th><th>straatnaam</th><th>stad</th><th>postcode</th><th>landcode</th><th>emailadres</th><th>telefoonnummer</th><th>geboortedatum</th><th>werk</th>";
        echo "</thead><tbody>";
        foreach($resultq as $data) {
            echo "<form action='beheerderprocesV.php' method='POST'>";
            echo "<tr>";
            echo "<td>";
            echo "" . $data['idclient']."<input type='hidden' name='idclient' value ='".$data["idclient"]."'></td>";
            echo "<td>";
            echo "" . $data['givenname']."<input type='hidden' name='givenname' value ='".$data["givenname"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "<p>" . $data['surname']."<input type='hidden' name='surname' value ='".$data["surname"]."'></td>";
            echo "</p>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['middleinitial']."<input type='hidden' name='middleinitial' value ='".$data["middleinitial"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['title']."<input type='hidden' name='title' value ='".$data["title"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['gender']."<input type='hidden' name='gender' value ='".$data["gender"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['streetadress']."<input type='hidden' name='streetadress' value ='".$data["streetadress"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['city']."<input type='hidden' name='city' value ='".$data["city"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['zipcode']."<input type='hidden' name='zipcode' value ='".$data["zipcode"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['countryid']."<input type='hidden' name='countryid' value ='".$data["countryid"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['emailadress']."<input type='hidden' name='emailadress' value ='".$data["emailadress"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['telephonenumber']."<input type='hidden' name='telephonenumber' value ='".$data["telephonenumber"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['birthday']."<input type='hidden' name='birthday' value ='".$data["birthday"]."'></td>";
            echo "</td>";
            echo "<td>";
            echo "" . $data['occupation']."<input type='hidden' name='occupation' value ='".$data["occupation"]."'></td>";
            echo "</td>";
// This system will check of you really want to delete the purchase.
            echo "<div class='panel-heading'>Weet u het zeker dat u de beheerder "; 
            echo "".$data["givenname"].""; 
            echo " wilt verwijderen?</div>";
            echo "<div class='panel-body'>";
            echo "<input type='submit' name='Ja' class='admindelete' value='Ja'></input>";     
            echo "<input type='submit' name='Nee' class='admindelete' value='Nee'></input>"; 
            echo "</div>";

            echo "</form>";
            echo "</tr>";
          }
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