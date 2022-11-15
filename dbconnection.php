<?php 

$sname="localhost";
$unmae="root";
$password = "";
$db_name = "adoptmeh";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn){
    die("Error: Failed to connect to database!");
}

$default_query = mysqli_query($conn, "SELECT * FROM `dogs`") or die(mysqli_error($conn));
$check_default = mysqli_num_rows($default_query);

if (!$conn) {
    echo "Connection failed!";
}

?>