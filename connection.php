<?php

$host="localhost";
$user="root";
$pass="";
$db="project_hub";

$con=mysqli_connect($host,$user,$pass,$db);

if ($con) {
    echo "";
}
else
{
    echo "DB Not Connected";
}

