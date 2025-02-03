<?php
require_once 'user.php';  //perfshin user.php per me perdor klasen user

//kontrollon nese formulari u dorzu me metoden POST 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   //i merr te dhenat e futura nga perdoruesi
   $email = $_POST['email'];
   $password = $_POST['password'];
   $remember_me = isset($_POST['remember_me']);


   //krijon nje User objekt
   $user = new User($conn);

   //provon me identifiku userin
   if ($user->login($email, $password, $remember_me)) {
      header("Location: ../html/travelly.php"); //nese hyrja eshte e suksesshme e dergon ne faqen kryesore
      exit();
   } else {
      echo "Incorrect email or password!"; //nese deshton, dergon ket mesazh
   }
}
?>
   