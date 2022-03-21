<?php 
session_start(); 
include "dbconnect.php";
$errorfree = true;
echo "<br><main>";

/* This is a check to see if the user has submitted the form. If so, the code will run. If not, the
user will be redirected to the login page. */
if (isset($_POST['loginclient']))
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	/* This is sanitizing the input from the user. This means that the user cannot input any code that
	will cause the website to crash. */
	$eml = filter_var($_POST["emailadress"], FILTER_SANITIZE_STRING);
	$pw = validate($_POST['passwrd']);

	/* This is checking if the email is empty. If it is empty, it will redirect the user to the login
	page. */
	if (empty($eml)) {
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, inloggen is niet gelukt</div>";
        echo "<div class='panel-body'><br>Uw email is onjuist</div>";
        echo "</div>";
        echo "</div>";
		header("Location: inlogbeheer.php?error=email is required");
	    exit();
	}else if(empty($pw)){
        echo "<div class='container'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'><br><br>Helaas, inloggen is niet gelukt</div>";
        echo "<div class='panel-body'><br>U wachtwoord is onjuist</div>";
        echo "</div>";
        echo "</div>";
		header("Location: inlogbeheer.php?error=password is required");
	    exit();
	}else{
		require_once "dbconnect.php";
		$eml = filter_var($_POST["emailadress"], FILTER_SANITIZE_STRING);
		$query = $db->prepare("SELECT * FROM client WHERE emailadress = :eml");
		$query->bindValue(':eml', $eml);
		$query->execute();
		$result = ($db);

		if ($query->rowCount() == 1) {
			$result=$query->fetch(PDO::FETCH_ASSOC);
			if ($result['emailadress'] == $eml) {
            	$_SESSION['givenname'] = $result['givenname'];
            	$_SESSION['surname'] = $result['surname'];
            	$_SESSION['idclient'] = $result['idclient'];
            	header('Refresh: 3; url=beheerderpagina.php');
				echo "<div class='container'>";
				echo "<div class='panel panel-primary'>";
				echo "<div class='panel-heading'><br><br><h1>Welkom</h1></div>";
				echo "<div class='panel-body'><br>", $_SESSION['givenname'];
				echo "</div>";
				echo "</div>";
            }else{
				header("Location: inlogbeheer.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: inlogbeheer.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: https://www.serebii.net/potw-dp/379.shtml.php");
	exit();
}