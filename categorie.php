<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Company</title>
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<title>Catogorie</title>
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
        <h1>Welke catogorieën van de producten hebben we?</h1>
        <section>
            <article>
                <p>We hebben 8 verschillende catogorieën van producten!<br>
                <br>
                <?php 
        require_once ("dbconnect.php"); 
        $query = $db->prepare("SELECT * FROM type");
        $query->execute();
//        var_dump($query);
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);

        if($query->rowCount() > 0){
            echo "<table>";
            echo "<thead>";
            echo "<th>Categorieën</th>";
            echo "</thead><tbody>";
            foreach($resultq as $data) {
                echo "<tr>";
                echo "<td>";
                echo "" . $data['name'];
                echo "</td>";
                echo "</tr>";
              }
              echo "</tbody></table>";
        }
        else {
            echo "<h2>Helaas .... geen resultaten gevonden</h2>";
        }
?>

            </article>
        </section>
    </main>
</body>

</html>