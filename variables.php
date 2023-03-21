<?php 
  echo "これはphp のテキストです。";
  $name = "kaneki"; //string
  $age = 18;  //integer
  $product_price = 22.45; //Float
  $has_mercedes = false;

  echo $age;
  echo $has_mercedes;

  var_dump($has_mercedes);
  var_dump($age);
  var_dump($name);
  var_dump($product_price);

  echo $name." is ".$age." year old <br>"; //Cách 1
  echo `$name is $age year old`; //Cách 2


  //Trong js thì 2 string không thể cộng nhau và tạo thành string "23" nhưng trong php thì nó sẽ tạo thành số nguyên int(5)
  $sum = "2" + "3";
  var_dump($sum);
  // Ngoài ra còn những phép tính khác
  echo 5*3;
  echo 10/2;
  echo 10%3; //Phép chia lấy dư

  //Gọi biến hằng số trong php
  //Constant
  define("SERVER_NAME", "localhost");
  define("DATABASE_NAME", "test_db");
  echo "server: " .SERVER_NAME.", db: ".DATABASE_NAME
?>