<?php
session_start();

header("Cache-Control: no-cache, no-store, must-revalidate"); 
header("Pragma: no-cache"); 
header("Expires: 0");

include 'database.php';


if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    $first_name =$_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email= $_POST['email'];
    $password= password_hash($_POST['password'],PASSWORD_DEFAULT); 

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";

        if (isset($_POST['remember_me'])) {
           
            setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/", "", true, true);
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
 $stmt->close();
 $conn->close();
}
?>