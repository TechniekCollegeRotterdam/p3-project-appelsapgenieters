<!DOCTYPE html>
<html lang="nl"> 
<head>
	 <meta charset="UTF-8">
	 <title>Company</title>
	 <link rel="stylesheet" type="text/css" href="company.css">  
</head>

<body>  
	<header>
		<h1>Company</h1>
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
 
	<!-- op de home pagina wat enthousiaste tekst over het bedrijf en de producten -->
 	<main>	
		<p>
            <h2>Zoek klanten op woonplaats</h2>
            <form action="zkklantwpl.php"></form>
        </p> 
		<p>
            <h2>Zoek klanten op postcode</h2>
            <form action="zkklantpcd.php"></form>

        </p>
		<p>
            <h2>Zoek producten op type</h2>
            <form method="post" action="zkproducttype.php">
            <table class="elementsContainer">
            <tr>
              <td>
                <input type="text" name="search" placeholder="type een producttype">
              </td>
              <td>
                <input type="submit" name="submit" value="search">
                </input>
              </td>
            </tr>
          </table>
          </form>

		</p>
		<p>
            <h2>Zoek producten op naam</h2>
            <form method="post" action="zkproductnaam.php">
          <table class="elementsContainer">
            <tr>
              <td>
                <input type="text" name="search" placeholder="type een productnaam">
              </td>
              <td>
                <input type="submit" name="submit" value="search">
                </input>
              </td>
            </tr>
          </table>
        </form>

		</p>
	</main>
	
</body>
</html>
	
