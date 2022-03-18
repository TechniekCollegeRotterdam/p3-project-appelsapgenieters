<?php 
session_start(); 
include "dbconnect.php";
$errorfree = true;
echo "<br><main>";

if (isset($_POST['loginclient']))
 {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$eml = filter_var($_POST["emailadress"], FILTER_SANITIZE_STRING);
	$pw = validate($_POST['passwrd']);

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
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: melk4pakjes.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: producten.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: https://www.serebii.net/potw-dp/379.shtml.php");
	exit();
}