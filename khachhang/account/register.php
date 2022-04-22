<?php 
    include ("../../admin/config/config.php");
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
  
    
    $pwd=md5($pwd);
    $sql_themtk="INSERT INTO khachhang (HoTenKH, SoDienThoai, email, username, password) VALUES ( '".$name."' , '".$phone."', '".$email."', '".$username."', '".$pwd."')";
    mysqli_query($mysqli,$sql_themtk);
    $sql_themdiachi="INSERT INTO diachikh (DiaChi,username) VALUES ('".$address."','".$username."')";
    mysqli_query($mysqli,$sql_themdiachi);
    header("location:./../index.php");

?>