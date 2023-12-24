<?php  
session_start();
$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "dbmsproject";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}