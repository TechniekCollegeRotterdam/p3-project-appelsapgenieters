<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
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
    <main>
<?php 
        require_once ("dbconnect.php"); 
        $zoek=filter_var($_POST["search2"], FILTER_SANITIZE_STRING);
//        var_dump($zoek);
        $query = $db->prepare("SELECT * FROM type
        WHERE typeid LIKE :ctypeid");
        $query->bindValue(':ctypeid', "%$zoek%");
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
                echo "<p>€". $data['price']."</p>";
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

</main>
    </body>
    </html>