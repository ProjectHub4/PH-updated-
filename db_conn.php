<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "project_hub";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}