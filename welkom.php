<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>inlog</title>
	<link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
     <h1>Welkom, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Uitloggen</a>
</body>
</html>

<?php 
}else{
     header("Location: inlogbeheer.php");
     exit();
}
 ?>