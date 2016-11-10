<?php
$string = "123450ABCD!@#$%^";
$suffle = str_shuffle($string);
$password = substr($suffle,0,4);
echo $password;

?>