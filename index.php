<?php
session_start();
if(isset($_SESSION['permission']) && $_SESSION['permission'] == "login"){
	echo "Successfully Login<br>";
	if(isset($_SESSION['user'])){
		echo "Welcome Mr. ". $_SESSION['user'] . "<a href='logout.php'>Logout</a>";
	}
}else{
	header("Location: login.php");
	exit;
}
?>
<hr>
This is homepage.<br>
<?php  
echo md5("1234");
?>