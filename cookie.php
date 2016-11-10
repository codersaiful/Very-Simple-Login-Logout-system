<?php
if(isset($_COOKIE['test'])){
	echo $_COOKIE['test'];
}else{
echo "Cookie not found!";
	
	setcookie('test','Saiful Islam',time()+10);

}
?>