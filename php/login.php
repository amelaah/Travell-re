<?php
session_start();

// i refresh faqja te dhanat mos me i cache
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

//databaza
include "database.php";

//i merr te dhanat i shtin neper variabla
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $stmt = $conn->prepare("SELECT id, first_name, password FROM users WHERE email = ?"); //statement i sql
   $stmt->bind_param("s", $email);     //tregon qe email eshte string
   $stmt->execute();  //e ekzekuton statement
   $stmt->store_result();


   //kontrollon a ka users me ate email
   if ($stmt->num_rows > 0) {
      $stmt->bind_result($user_id, $first_name, $hashed_password);  //i shtin neper variabla te dhenat e marra nga user ne databaze
      $stmt->fetch();

      //kontrollon  nese password i user eshte i njejt me hashed password
      if (password_verify($password, $hashed_password)) {
         $_SESSION['user_id'] = $user_id;  //i shtin te dhanat e user ne sesione per ti mbajt ne mend
         $_SESSION['first_name'] = $first_name;

          setcookie('is_logged_in', 'true', time() + (86400 * 30), '/');  //cookie per 30 dite

          //kontrollon a eshte check 'remember me'
         if (!empty($_POST['remember_me'])) {
            //nese po set cookies per 30 dite
            setcookie("user_email", $email, time() + (86400 * 30), "/");
            setcookie("user_password", $password, time() + (86400 * 30), "/");
         }
            header("Location: /html/travelly.html");  //te qon ne travelly.html
            exit();
         
      } else {
            echo "Incorrect password!";
         }
      } else {
         echo "No user found with that e-mail!";
      }
      
//e mbyll sql statement edhe lidhjen me databazen
   $stmt->close();
   $conn->close();
}
?>