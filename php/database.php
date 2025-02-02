<?php
// parametrat e databzes
$servername = "localhost";
$username = "root";
$password ="";
$database ="travelly";

// lidhja me databaz
$conn =mysqli_connect($servername, $username, $password, $database);

// nese lidhja sosht succecful:(
if(!$conn){
    die("Connection failed!:". mysqli_connect_error());
}

?>

