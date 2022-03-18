<?php 
session_start(); 
include "dbconnect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header('Refresh: 2; url=inlogbeheer.php');
	    exit();
	}else if(empty($pass)){
        header('Refresh: 2; url=inlogbeheer.php');
	    exit();
	}else{
		$sql = "SELECT * FROM login WHERE email ='$email' AND password='$pass'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: welkom.php");
		        exit();
            }else{
				header('Refresh: 2; url=inlogbeheer.php');
		        exit();
			}
		}else{
			header('Refresh: 2; url=inlogbeheer.php');
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}