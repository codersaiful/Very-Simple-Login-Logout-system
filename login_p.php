<?php
session_start();
if(isset($_POST['username']) && isset($_POST['username'])){

	//usename = saiful;
	//password = 1234;
	$db_username = "saiful";
	$db_password = "81dc9bdb52d04dc20036dbd8313ed055"; //its the md5() version of 1234


	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == $db_username){
		if(md5($password) == $db_password){
				session_start();
				$_SESSION['permission']="login";
				$_SESSION['user']=$username;
				
				header("Location: index.php");
				exit;
		}
		else{
			$msg =  "Your username right, but Password Error.";
			header("location: login.php?msg=".$msg);
			exit;
		}
	}
	else{
	$msg = "Sorry!! Check Username and input again";
	header("location: login.php?msg=".$msg);
	exit;
	}
}else{

	if(isset($_SESSION['permission']) && $_SESSION['permission'] == "login"){
		header("location: index.php");
		exit;
	}else{
		header("location: login.php");
		exit;
	}

}
?>