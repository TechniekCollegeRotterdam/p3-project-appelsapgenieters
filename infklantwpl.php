<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>geslacht</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
    <header class="banner">
        <img src="images/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'nav.html'; ?>
    </header>
    <main>
        <h1>Wat is onze gemiddelde klant?</h1>
    </main>
    
     <br> <br> <br>
    <h1></h1>
    <?php

    require_once ("dbconnect.php");

        $query = $db ->prepare("SELECT AVG (idclient) FROM client;");
        $query-> execute();
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        if ($query ->RowCount()>0) {
            echo "<table>";
            echo	"<thead>";
            echo    "<th>Onze gemidelde klant is.</th>";
            echo   "</thead> <tbody>";


          foreach ($resultq as &$data) {
            echo "<tr>";
            echo "<td>";
            echo " " . $data['idclient'];
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