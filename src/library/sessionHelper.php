<?php


/**
 * This function must first check where are we
 *
 * If we are on index and we are already logged it must redirect
 * to the dashboard, if not it must check for login errors, login info or logouts
 *
 * If we are on dashboard it must check that we are already logged, if not
 * it must redirect us to the index and show an error
 */
function checkSession()
{
  session_start(); //Cuando se ejecuta el session start es cuando se crea la cookie

if(!isset($_SESSION["username"]))
{
  header("Location: ../../index.php");
}

}

/**
 * This function must unset all session and cookies variables
 * and also destroy the session itself
 */
function destroySession()
{
}

/**
 * This function must get input form values and check them
 * If user is correct we must redirect user to the private area
 */
function authUser()
{

  session_start();

$userName = $_POST["username"];
$passWord = $_POST["password"];

$_SESSION["username"] = $userName;
$_SESSION["password"] = $passWord;

checkUser();
// echo "username: ".$userName."<br/>";
// echo "password: ".$passWord;
// echo "<br/>";
// echo "session username: ".$_SESSION["username"];


// echo "<pre>";
// var_dump($json["users"][0]["name"]) ;
// var_dump($json);


}

/**
 * This function must emulate a database user search and return
 * true in case email and password matches
 */
function checkUser()
{
  //Contect to DataBase
  $userName = $_POST["username"];
$passWord = $_POST["password"];

$_SESSION["username"] = $userName;
$_SESSION["password"] = $passWord;

$string = file_get_contents("../../resources/users.json");
$json = json_decode($string, true);

  $usernamedb=$json["users"][0]["name"];
$passworddb=$json["users"][0]["password"];


if($passworddb === $passWord && $usernamedb === $userName)
{
  // var_dump("Es correcto") ;
  header("Location: ../dashboard.php");
}
else
{
  // echo "No es puto correcto";
  header("Location: ../../index.php");
}
}

/**
 * This function is used to delete session Cookie
 */
function destroySessionCookie()
{
}

/**
 * This function is used to check for login errors
 */
function checkLoginError()
{

}

/**
 * This function is used to check for login information
 */
function checkLoginInfo()
{
}

/**
 * This function is used to check for logout
 */
function checkLogout()
{
}