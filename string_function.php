<?php 
  // echo "String function php"

  $full_name = "Kaneki Ken";
  echo "length: " .strlen($full_name)."<br>";
  //reverse a string
  echo strrev($full_name)."<br>";
  // conert to Lowercase
  echo strtolower($full_name)."<br>";
  echo strtoupper($full_name)."<br>";

  //find and replace
  echo str_replace(" ", "-", $full_name)."<br>";
  if(str_starts_with(strtolower($full_name), "kaneki")){
    echo "His name starts with Ken";
  }else {
    echo "His name starts with Kaneki";
  }

  echo "<h1> html string</h1>";
  echo htmlspecialchars("<h1> html string</h1>");

  printf("%s likes %s", "Kaneki", "G63")
?>