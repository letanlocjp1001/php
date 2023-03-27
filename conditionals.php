<?php 
  echo "We talk about conditional in PHP <br>";
  $age = 30;
  if($age > 18){
    echo "You are greater than or equal to 18 years old<br>";
  }
  else {
    echo "You are so young<br>";
  }

  // $time = date("d F Y");
  // echo $time;
  // $date_time = date("H");
  // echo $date_time;
  // if($date_time <12){
  //   echo "Good Morning";
  // }
  // else if($date_time >12 && $date_time<17){
  //   echo "goog afternod";
  // }
  // else{
  //   echo "goog night";
  // }
  // $comments = [
  //   "Godd", "I like it", "How are you?"
  // ];
  // if(empty($comments)){
  //   echo "No comments";
  // }
  // else{
  //   echo "Yes comments";
  // }
// 
  // echo empty($comments) ? "No comments <br>": "Yes comment <br>";

  //Toán tử coalescing operator là toán tuer gán giá trị mặc định khi giá trị của kiểm tra bị null
    // $first_comment = $comments[0] ?? "No comments";
    // echo $first_comment;

    $favorite_color = "aqua";
    switch($favorite_color){
      case "red":
        echo 'You choose ReD<br>';
        break;
      case "aqua":
        echo "You choose Aqua<br>";
        break;
      case "blue":
        echo "You choose Blue<br>";
        break;
      default:
        echo "You need choose<br>";
    }
?>
