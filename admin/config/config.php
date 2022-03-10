<?php
$mysqli = new mysqli("localhost","root","","webbanhang");

// Check connection
if ($mysqli->connect_errno) {
  echo "Lỗi Kết Nối: " . $mysqli->connect_error;
  exit();
}
?>