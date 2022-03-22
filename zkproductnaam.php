<?php 
        require_once ("dbconnect.php"); 
        $zoek=filter_var($_POST["search"], FILTER_SANITIZE_STRING);
//        var_dump($zoek);
        $query = $db->prepare("SELECT * FROM product
        WHERE prodname LIKE :cprodname");
        $query->bindValue(':cprodname', "%$zoek%");
        $query->execute();
//        var_dump($query);
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

        if($query->rowCount() > 0){
            echo "<table>";
            echo "<thead>";
            echo "<th>productid</th><th>Naam</th><th>Prijs</th><th>hoeveelheid</th><th>soort</th>";
            echo "</thead><tbody>";
            foreach($resultq as $data) {
                echo "<tr>";
                echo "<td>";
                echo "". $data['idproduct'];
                echo "</td>";
                echo "<td>";
                echo "" . $data['prodname'];
                echo "</td>";
                echo "<td>";
                echo "". $data['prijs'];
                echo "</td>";
                echo "<td>";
                echo "". $data['stockquantity'];
                echo "</td>";
                echo "<td>";
                echo "". $data['typeid'];
                echo "</td>";
                echo "</tr>";
              }
              echo "</tbody></table>";
        }
        else {
            echo "<h2>Helaas .... geen resultaten gevonden</h2>";
        }
?>

    </body>