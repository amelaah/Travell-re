<?php
$servername = "localhost";
$username = "root";
$password ="";
$database ="travelly";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Connention failed!:". $conn->connect_error);
}

?>

