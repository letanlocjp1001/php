<?php 
$y = 22;
  echo "This lesson is about function PHP <br>";

  // function sayHello($name){ //function with "arguments
  //   global $y;
  //   echo $y;
  //   echo "Hello $name <br>";
  // }

  // sayHello("Kaneki"); //call function with "parameters"

  // function sum($a, $b){
  //   return $a + $b;
  // };
  // echo sum(50,2)."<br>";

  // $multiply = function($a, $b){
  //   return $a*$b;
  // };
  // echo $multiply(2, 3)."<br>";

  // $substract = fn($a, $b) => $a -$b;

  // echo $substract(14, 2)


  // $name = ["john", "anna", "black", "link"];
  // echo "number of items : ".count($name)."<br>";

  // //add the last item
  // array_push($name, "kaneki", "tommy");
  // //add the first item
  // array_unshift($name, "momo");
  // //remove the last item;
  // array_pop($name);
  // //remove the first item;
  // array_shift($name);
//chunk an array

// $chunked_array = array_chunk($name, 3);

//   // var_dump (in_array("kaneki", $name));
//   // print_r($name)
//   // print_r($chunked_array);

//   $array_one = [1, 3, 5];
//   $array_two = [2, 4, 6];

//   $merged_array = array_merge($array_one, $array_two);

  
//   //spreatd operator
  // $array_three = [...$merged_array]; //clone an array
  // $merged_array[0] = 1243;
  
  // print_r($merged_array);
  // print_r($array_three);

  // $array_four = [...$array_one, ...$array_three];
  
  // print_r($array_four);
//combine two arrays
// $a = ["name", "email", "age"];
// $b = ["Kaneki", "Kaneki@gmail.com", 18];

// $c = array_combine($a, $b);
//   // print_r($c);
//   print_r(array_keys($c));
//   print_r(array_values($c));

  $number = range(0, 5);
    print_r($number);

    $squared_numbers = array_map(function($each_number){
      return $each_number * $each_number;
    }, $number);

    print_r($squared_numbers);

    //$filter an array

    $filtered_numbers = array_filter($number, fn($each_number)=> $each_number %2 == 0);

    print_r($filtered_numbers)
?>