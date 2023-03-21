<?php 
  echo "We talk about Array <br>";
  $some_numbers = [1, 3, 5, 7];
  $fruits = ["pineapple", "melon", "apple"];
  // var_dump($some_numbers);
  // print_r($some_numbers);
  // print_r($fruits);
  // echo $fruits[2];


  //associative array
  $colors = [
    3 => "red",
    5 => "green",
    7 => "blue",
  ];

  $person = array(
    "name"=> "kaneki",
    "age" => 18,
    "city" => "Osaka" );

  echo $colors[5]."<br>";
  echo $colors[7]."<br>";

  echo $person["name"]."<br>";
  echo $person["age"]."<br>";
  echo $person["city"]."<br>";
?>