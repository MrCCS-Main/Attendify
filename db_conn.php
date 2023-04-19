<?php

$servername = "localhost";
$Uname = "root";
$pass = "";

$db_name = "attendify";

$conn = mysqli_connect($servername, $Uname, $pass, $db_name) or die (mysqli_error());

if (!$conn ) {
	echo "Connection failed!";
}