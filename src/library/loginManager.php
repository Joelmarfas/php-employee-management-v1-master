<?php

session_start();

$userName = $_POST["username"];
$passWord = $_POST["password"];

$_SESSION["username"] = $userName;
$_SESSION["password"] = $passWord;

echo "username: ".$userName."<br/>";
echo "password: ".$passWord;
echo "<br/>";
echo "session username: ".$_SESSION["username"];
  // header("location: ../dashboard.php")
?>