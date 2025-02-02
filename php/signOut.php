<?php
session_start();
// mbyll variablat e session
session_unset();
session_destroy();

// shkatrron cookies tu i kthy ne koh mbrapa per 1 or ne ket rast
setcookie("user_email", "", time() - 3600, "/");
setcookie("user_password", "", time() - 3600, "/");
setcookie("is_logged_in", "", time() - 3600, "/");

header("Location: /html/travelly.html");
exit();
?>