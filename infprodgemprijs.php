<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gemiddelde prijs</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
    <header class="banner">
        <img src="images/logo.jpg" alt="logo" width="200" height="200">
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
    
     <br> <br> <br>
    <h1>gemiddelde prijs van alle bestellingen</h1>
    <?php
    // verbinding maken database shabu //
    require_once ("dbconnect.php");
    //  alle gegevens ophalen uit de tabel: product
        $query = $db ->prepare("SELECT AVG(price) FROM product;");
        $query-> execute();
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        if ($query ->RowCount()>0) {
            echo "<table>";
            echo	"<thead>";
            echo    "<th> Prijs €</th>";
            echo   "</thead> <tbody>";


          foreach ($resultq as &$data) {
            echo "<tr>";
            echo "<td>";
            echo " " . $data['price'];
            echo "</td>";
            echo "</tr>";


           
        } 
        echo "</tbody></table>";
        } else {
             echo "Helaas niks gevonden.";
         }

    ?>
    
    <footer>
    <p><i>Nieuwsstraat 210<br>
        3201 EE<br>
        Spijkenisse</i>
    </p>
  </footer>

</body>
</html>

</body>