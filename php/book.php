<?php
session_start();
// faqja me i refresh te dhanat dmth mos mi rujt
header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0");

// lidhja me databaz
include 'database.php';

// i merr te dhanat i shtin ne variablat first_name e neper tjerat edhe kontrollon a u mush forma e regjistrimit
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    $first_name =$_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email= $_POST['email'];
    $password= password_hash($_POST['password'],PASSWORD_DEFAULT); 

//   sql statment kjo i shtin te dhanat ne databaz ne menyr te sigurt 
    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");

    // ktu qato ? i kthen ne actual users data edhe i tregon sql se jon string(ssss)
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
// egzekutohet qaj statment
    if ($stmt->execute()) {
        echo "Registration successful!";

// i run useers id edhe first name ne sessions per me mujt me kon log in edhe mas regjistrimit
        $_SESSION['user_id'] = $conn->insert_id; 
        $_SESSION['first_name'] = $first_name;

        // me mbajt men user qe osht log in per 30 dit
        setcookie('is_logged_in', 'true', time() + (86400 * 30), '/');

// me mbajt men email te user nese e prek remeber me
        if (isset($_POST['remember_me'])) {
           
            setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/");
          
        } 
            header("Location: /html/travelly.html");
            exit();
        
    }    else  {
        
        echo "Error:" . $conn->error;
    }

// mbyllja databzes dhe statment te sql
 $stmt->close();
 $conn->close();
}
?>