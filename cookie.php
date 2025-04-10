<?php
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + 3600, "/");
?>
<html>
<body>

<?php
if(isset($_COOKIE[$cookie_name])) {
  echo "<br>Cookie $cookie_name đã được thiết lập";
  echo "<br>Giá trị của $cookie_name là: $_COOKIE[$cookie_name]";
} else {
  echo "<br>Không tồn tại cookie $cookie_name";
  
}
?>

