<?php 

  // echo "Superglobals in PHP"
  // print_r($_SERVER)

  // if(isset($_GET["name"])){
  //   echo $_GET["name"]."<br>";

  // }
  // if(isset($_GET["age"])){
  //   echo $_GET["age"]."<br>";
  // }

  $email = htmlspecialchars($_POST["email"] ?? "") ;
  $password =htmlspecialchars($_POST["password"] ?? "");
  echo $email."<br>";
  echo $password."<br>";
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
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
  <div>
    <label for="name">Email</label>
    <input type="email" name="email">
  </div>
  <div>
    <label for="password">Password</label>
    <input type="password" name="password">
  </div>
  <input type="submit">
</form>
</body>
</html>