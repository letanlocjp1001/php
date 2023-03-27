<?php 
  echo "We talk about Iteration PHP (loop)<br>";
"<br>";
"<br>";
"<br>";
  // for($i = 5; $i <=10 ; $i++){
  //   echo "i = $i<br>";
  // }

  // $i = 0;
  // while ($i <20){
  //   $i= $i +1;
  //   echo "i = $i<br>";
  // }

  // do {
  //   $i = $i + 1;
  //   echo "ii = $i<br>";
  // } while ($i <= 10);


  // $fruits = ["apple", "pineapple", "orange", "lemon"];
  // for($i=0; $i < count($fruits); $i++){
  //   echo $fruits[$i]."<br>";
  // }

  // foreach($fruits as$index => $fruit){
  //   echo "$index - $fruit<br>";
  // }

  $person =[
    "full_name" =>"Kaneki",
    "email" => "kaneki@gmail.com",
    "age" =>32,
  ];

  echo $person["full_name"]."<br>";

  foreach ($person as $key =>$value){
    echo "$key: $value <br>"; 
  }
?>