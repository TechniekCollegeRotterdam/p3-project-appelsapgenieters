<!DOCTYPE html>
<html>
<head>
	<title>Login beheer</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
	<header>
	<img src="images/Logo.jpg" alt="logo">
		<?php 
			include "navbezoeker.html";
		?>
	</header>
     <form action="loginbeheerder.php" method="post">
		 <br><br>
     	<h2>Login beheer</h2>
     	<?php if (isset($_POST['error'])) { ?>
     		<p class="error"><?php echo $_POST['error']; ?></p>
     	<?php } ?>
     	<label>E-mailadres</label>
     	<input type="text" name="emailadress" placeholder="vul hier uw emailadres"><br>

     	<label>Wachtwoord</label>
     	<input type="password" name="passwrd" placeholder="Password"><br><br>

     	<button class="colorp" type="submit" name="loginclient">Login</button>
     </form>
</body>
</html>