<?php
include('../../../admin/config/config.php');
session_start();
if(isset($_SESSION['user']) && isset($_POST['madc'])){
    $user = $_SESSION['user'];
    $madc = $_POST['madc'];
    //tra gio hang
    $sql_giohang = "SELECT * FROM giohang
                    WHERE username= '".$user."'";
    $query_giohang = mysqli_query($mysqli,$sql_giohang);
    $row_giohang = mysqli_fetch_array($query_giohang);
    //neu tim thay gio hang
    if($row_giohang){
        $madh = time().'_'.$user;
        //insert vao bang dathang
        $sql_dathang = "INSERT INTO dathang (MaDH,usernameKH,TrangThaiDH,MaDC) VALUES ('".$madh."','".$user."','1','".$madc."')";
        mysqli_query($mysqli,$sql_dathang);
        //xu ly cho tung hang hoa trong gio hang
        $sql_giohang2 = "SELECT * FROM giohang
                    WHERE username= '".$user."'";
        $query_giohang2 = mysqli_query($mysqli,$sql_giohang2);
        while($row=mysqli_fetch_array($query_giohang2)){
            //insert vao chitietdathang
            $chitiet_mshh = $row['MSHH'];
            $chitiet_sl = $row['SoLuong'];
            $sql_chitietdh = "INSERT INTO chitietdathang (MaDH,MSHH,SoLuong) VALUES ('".$madh."','".$chitiet_mshh."','".$chitiet_sl."')";
            mysqli_query($mysqli,$sql_chitietdh);
            //cap nhat lai so luong vao hanghoa
            $sql_hanghoa = "SELECT * FROM hanghoa WHERE MSHH = '".$chitiet_mshh."'";
            $query_hanghoa = mysqli_query($mysqli,$sql_hanghoa);
            $row_hanghoa = mysqli_fetch_array($query_hanghoa);
            $sl_kho = ($row_hanghoa['SoLuongHang']-$chitiet_sl);
            $sql_capnhathh = "UPDATE hanghoa SET SoLuongHang = '".$sl_kho."' WHERE MSHH = '".$chitiet_mshh."'";
            mysqli_query($mysqli,$sql_capnhathh);
            
        }
        //xoa gio hang trong bang giohang
        $sql_xoacart = "DELETE FROM giohang WHERE username = '".$user."'";
        mysqli_query($mysqli,$sql_xoacart);

        echo '<script type= "text/javascript">
            alert("Thanh toán thành công!")
            window.location.href = "../../index.php";
            </script>';
    }else{
        echo '<script type= "text/javascript">
            alert("Giỏ hàng trống, thanh toán thất bại!")
            window.location.href = "../../index.php";
            </script>';
    }
}else{
    header("location:../../index.php");
}
?>