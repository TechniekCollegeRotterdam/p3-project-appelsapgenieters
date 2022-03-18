<!DOCTYPE html>
<html>
<head>
	<title>Login beheer</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>
<header>
		<h1>Login beheer</h1>
		<!-- hieronder wordt het menu opgehaald. -->
		<?php
			include "nav.html";
		?>
    <br>
    <br>

	</header>
<body>
     <form action="login.php" method="post">
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email</label>
     	<input type="text" name="mail" placeholder="vul hier uw email in"><br>

     	<label>Wachtwoord</label>
     	<input type="password" name="password" placeholder="vul hier uw wachtwoord in"><br>

     	<button class="colorp" type="submit">Inloggen</button>
     </form>
</body>
</html>