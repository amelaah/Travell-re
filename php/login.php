<?php
session_start();
include "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $email = $_POST['email'];
   $password = $_POST['password'];
  

   $result = $conn->query("SELECT * FROM users WHERE email = '$email'");

   if ($result->num_rows > 0){
      $row = $result->fetch_assoc();

      if (password_verify($password, $row['password'])) {
         $_SESSION['user_id'] = $row['id'];
         $_SESSION['first_name'] = $row['first_name'];

         if (!empty($_POST['remember_me'])) {
            setcookie("user_email", $email, time() + (86400 * 30), "/");
            setcookie("user_password", $password, time() + (86400 * 30), "/");
         }
            header("Location: travelly.html");
            exit();
         
      } else {
            echo "Incorrect password!";
         }
      } else {
         echo "No user found with that e-mail!";
      }
   
   $conn->close();
}
?>