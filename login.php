<?php
session_start();
if(isset($_SESSION['permission']) && $_SESSION['permission'] == "login"){
	header("location: index.php");
	exit;
}
?>
<?php
if(isset($_GET['msg'])){
echo $_GET['msg'];
}
?>
<h1>Login here</h1>
<form action="login_p.php" method="POST">
	<input type="text" name="username" placeholder="Username"><br>
	<input type="password" name="password" placeholder="Password"><br>
	<input type="submit" value="Login">
</form>
