<?php
include('../../../admin/config/config.php');
session_start();
if(isset($_POST['capnhatgiohang']) && isset($_POST['cart_username'])){
    $count = count($_POST['cart_username']);
    for($i=0;$i<$count;$i++){
        $username = $_POST['cart_username'][$i];
        $mshh = $_POST['cart_MSHH'][$i];
        $soluongsp = number_format($_POST['cart_sl'][$i]);
        $giasp = $_POST['cart_giasp'][$i];
        $thanhtien = ($soluongsp*$giasp);
    
        $sql_updatecart = "UPDATE giohang SET SoLuong = ".$soluongsp.",Gia = ".$thanhtien." WHERE username = '".$username."' AND MSHH = '".$mshh."'";
        mysqli_query($mysqli,$sql_updatecart);
        header("location:../../index.php?quanly=giohang");
        
    }
}else{
    header("location:../../index.php?quanly=giohang");
}
?>
