<?php
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

include "database.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $stmt = $conn->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
   $stmt->bind_param("s", $email); 
   $stmt->execute();
   $stmt->store_result();

   if ($stmt->num_rows > 0) {
   
      $stmt->bind_result($user_id, $first_name, $hashed_password);
      $stmt->fetch();


      if (password_verify($password, $hashed_password)) {
         $_SESSION['user_id'] = $user_id;
         $_SESSION['first_name'] = $first_name;

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

   $stmt->close();
   $conn->close();
}
?>