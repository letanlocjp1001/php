<?php 
  echo "sessions in PHP<br>";

  //sesion are stored in ther server so it can be user across multiple pages

  session_start();
  if(isset($_POST["submit"])){
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];
    if($email == "kaneki@gmail.com" && $password == "123456"){
      $_SESSION["email"] = $email;
      header("Location: ./dashboard.php");
    }
    else {
      echo "Incorrect email /password";
    };

  }
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
  <h1>Login to your account</h1>
  <form action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]); ?>" method="POST">
  <div>
    <label for="name">Email</label>
    <input type="email" name="email">
  </div>
  <div>
    <label for="password">Password</label>
    <input type="password" name="password">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>