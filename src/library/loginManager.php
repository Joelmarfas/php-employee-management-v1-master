<?php

require_once("./sessionHelper.php");

authuser();
// header("Location: ./sessionHelper.php");


// $sessionid = session_id();

// unset all session variables
// unset($_SESSION);

// destroy session cookie
// if (ini_get("session.use_cokie")) {
//   $params = session_get_cookie_params();
//   setcookie(
//     session_name(),
//     "",
//     time() = 42000,
//     $params["path"],
//     $params["domain"],
//     $params["secure"],
//     $params["httponly"],
//   );
// }

//destroy the sessin
// session_destroy();
// ?>