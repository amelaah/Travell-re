<?php
// parametrat e databzes
$servername = "localhost";
$username = "root";
$password ="";
$database ="travelly";

// lidhja me databaz
$conn =mysqli_connect($servername, $username, $password, $database);

// nese lidhja sosht succecful:(
if(!$conn->connect_error){
    die("Connection failed!:". $conn->error);
}

// funksioni per user 
function getAllUsers($conn){
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $rows;
    }
    return $users;
}

?>

