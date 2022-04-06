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
        session_start();
        if(isset($_SESSION["bh-login"]))
        {
            include "navadmin.php";
			header('Refresh: 0; url=index.php?error=U bent al in gelogd!');
            exit();
        } elseif(isset($_SESSION["cl-login"]))
        {
            include "navclient.php";
			header('Refresh: 0; url=index.php?error=U bent al in gelogd!');
            exit();
        } else {
			include "navbezoeker.html";
		}
		?>
	</header>
     <form action="loginklant.php" method="post">
		 <br><br>
     	<h2>Login klant</h2>
		 <p>Log hier in als u klant bent.</p>
		 <br>
     	<?php if (isset($_POST['error'])) { ?>
     		<p class="error"><?php echo $_POST['error']; ?></p>
     	<?php } ?>
		 <div class="container">
     	<label>E-mailadres</label>
     	<input type="text" name="emailadress" placeholder="vul hier uw emailadres"><br>

     	<label>Wachtwoord</label>
     	<input type="password" name="passwrd" placeholder="Password"><br><br>

     	<button class="colorp" type="submit" name="loginclient">Login</button>
		 </div>
     </form>

	 
</body>
</html>

