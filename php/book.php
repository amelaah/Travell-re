<?php
require_once 'user.php';  //e perfshin user.php per me perdor klasen user 

// lidhja me databaz
include 'database.php';

//kontrollon nese kerkesa eshte bere me metoden POST
if ($_SERVER["REQUEST_METHOD"]  == "POST") {
    //i merr te dhenat e futura nga perdoruesi    
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $remember_me = isset($_POST['remember_me']);

    //krijojm nje User objekt dhe bejm lidhjen me bazen e te dhenave
    $user = new User($conn);

    //regjistron perdoruesin
    if ($user->register($first_name, $last_name, $email, $password, $remember_me)) {
        header("Location: /html/travelly.html");  //nese regjistrimi ka sukses, qojme perdoruesin te faqja kryesore
        exit();
    } else {
        echo "Registration failed!";  //nese regjistrimi deshton, shfaq ket
    }
}
?>
