<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
session_start(); //Cuando se ejecuta el session start es cuando se crea la cookie
$userName = $_SESSION["username"];
// $_SESSION["username"] = $userName;

echo "Username: ".$_SESSION["username"];
echo "<br/>";
echo "Password: ".$_SESSION["password"];
echo "<br/>";

  echo "Hola soy un puto dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <h1>Welcome to the Dashboard,
      <?=$userName?>.
    </h1>
  </div>
</body>

</html>