<?php

session_start();

$userName = $_POST["username"];
$passWord = $_POST["password"];

$_SESSION["username"] = $userName;
$_SESSION["password"] = $passWord;

echo "username: ".$userName."<br/>";
echo "password: ".$passWord;
  // header("location: ../dashboard.php")
?>