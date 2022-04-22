<?php
include('../../../admin/config/config.php');
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    if(isset($_GET['mshh'])){
        $mshh = $_GET['mshh'];
        $sql_xoasp = "DELETE FROM giohang
                    WHERE username ='".$user."' AND MSHH = '".$mshh."'";
        mysqli_query($mysqli,$sql_xoasp);
        header("location:../../index.php?quanly=giohang");
    }else{
        echo "<script>
            alert('Không thành công!')
            window.location.href = '../../index.php';
            </script>";
        }
}else{
    echo "<script>
        alert('Không thành công!')
        window.location.href = '../../index.php';
        </script>";
    }


?>