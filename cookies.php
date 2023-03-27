<?php 
  // Cookies - save data in remote browser
  // -You can retrieve it when the user visit the site again
  //

  //echo "COOKIES IN PHP!";
//save data to cookies
setcookie("name", "Kaneki", time() + 24*3600);
//after 1 day, cookie will be expired
// 1month = 24*3600*30
//check the exsting cookie

if(isset($_COOKIE["name"])){
  echo $_COOKIE["name"];
}
//Xóa cookie thì có thể xét thời gian âm, và giá trị rỗng
setcookie("name", "", time() - 24*3600) //unset cookie

?>