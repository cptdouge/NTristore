<?php
include('../../config/config.php');
session_start();
if(isset($_POST['madh']) && isset($_POST['trangthaidh'])){
    $count = count($_POST['madh']);
    for($i=0;$i<$count;$i++){
        $madh = $_POST['madh'][$i];
        $trangthai = $_POST['trangthaidh'][$i];
    
        $sql_updatecart = "UPDATE dathang SET TrangThaiDH = ".$trangthai." WHERE MaDH = '".$madh."'";
        mysqli_query($mysqli,$sql_updatecart);
        header("location:../../index.php?action=quanlydonhang&query=quanly");
        
    }
}else{
    header("location:../../index.php?action=quanlydonhang&query=quanly");
}
?>