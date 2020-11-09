<?php 

$server= "localhost";
$user= "root";
$password= "";
$database= "basiclearning_db";

$con= mysqli_connect($server, $user, $password);

mysqli_select_db($con, $database);

if ($con) {
    echo "Connected";
} else {
    echo "Connection failed!";
}

?>