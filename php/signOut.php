<?php
session_start();

// e bon page refresh per mos me cache data
header("Cache-Control: no-cache, no-store, must-revalidate"); 
// nese osht older version
 header("Pragma: no-cache");
header("Expires: 0");

 require_once 'user.php'; 
// krijon instance
 $user = new User($conn);
//  thirr metoden log out
 $user->logout();

 header("Location: ../html/travelly.php");
exit();
?>