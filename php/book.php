<?php
session_start();
if (!isset($_SESSION['previous_page'])) {
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
}
include 'database.php';


if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    $first_name =$_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email= $_POST['email'];
    $password= password_hash($_POST['password'],PASSWORD_DEFAULT); 

    $sql =  "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name','$last_name','$email','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";

        if (isset($_POST['remember_me'])) {
            
            setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/"); 
           
            
        }

        if (isset($_SESSION['previous_page'])) {
            header("Location: " . $_SESSION['previous_page']);
            exit();
           
        } else {
            header("Location: travelly.html");
            exit();
        }
    }    else  {
        echo "Error:" . $conn->error;
    }

 $conn->close();
}
?>