<?php 
session_start();

/* This is a way to check if the user is logged in. If the user is logged in, the user will be
redirected to the page he was trying to access. */
if (isset($_SESSION['idclient']) && isset($_SESSION['emailadress'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>inlog</title>
	/* This is a way to link the CSS file to the HTML file. */
     <link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
     /* This is a way to display the name of the user. */
     <h1>Welkom, <?php echo $_SESSION['givenname']; ?></h1>
     <a href="logout.php">Uitloggen</a>
</body>
</html>

<?php 
/* This is a way to redirect the user to another page. */
}else{
     header("Location: inlogbeheer.php");
     exit();
}
 ?>