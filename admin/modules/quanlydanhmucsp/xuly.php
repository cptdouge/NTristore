<?php
    include('../../config/config.php');
    $tenloaihang = $_POST['tendanhmuc'];
    if(isset($_POST['themdanhmuc']) && $_POST['tendanhmuc'] != ""){
        //them
        $sql_them = "INSERT INTO loaihanghoa(TenLoaiHang) VALUE ('".$tenloaihang."')";
        mysqli_query($mysqli,$sql_them);
        header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }elseif(isset($_POST['suadanhmuc'])&& $_POST['tendanhmuc'] != ""){
        //sua
        $sql_sua = "UPDATE loaihanghoa SET TenLoaiHang = '".$tenloaihang."' WHERE MaLoaiHang='$_GET[maloaihang]'";
        mysqli_query($mysqli,$sql_sua);
        header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }else{
        //xoa
        $id = $_GET['maloaihang'];
        $sql_xoa = "DELETE FROM loaihanghoa WHERE MaLoaiHang = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    }
?>