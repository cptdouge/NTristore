<?php
    include('../../config/config.php');
    $tensp = $_POST['tensp'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $soluongsp = $_POST['soluongsp'];
    $maloaihang = $_POST['maloaihang'];
    $motasp = $_POST['motasp'];
    //xu ly hinh anh
    $hinhdaidien = $_FILES['hinhanhdaidien']['name'];
    $hinhdaidien_tmp = $_FILES['hinhanhdaidien']['tmp_name'];
    $hinhdaidien = time().'_'.$hinhdaidien;

    

    if(isset($_POST['themsanpham'])){
        //them
        $sql_themsp = "INSERT INTO hanghoa (MSHH,TenHH, MoTa, Gia, SoLuongHang, MaLoaiHang) 
        VALUES ('".$masp."','".$tensp."', '".$motasp."', '".$giasp."', '". $soluongsp."', '".$maloaihang."')";
        mysqli_query($mysqli,$sql_themsp);

        move_uploaded_file($hinhdaidien_tmp,'../../img_hanghoa/'.$hinhdaidien);
        $sql_themhinhdaidien = "INSERT INTO hinhhanghoa (TenHinh, DaiDien, MSHH)
        VALUES ('".$hinhdaidien."', '1', '".$masp."')";
        mysqli_query($mysqli,$sql_themhinhdaidien);


        header('location:../../index.php?action=quanlysp&query=them');

    }elseif(isset($_POST['suasanpham'])){
        //sua
        //neu co upload file hinh anh moi
        if($_FILES['hinhanhdaidien']['size'] != 0){
            //sua bang hanghoa
            $sql_sua = "UPDATE hanghoa SET TenHH = '".$tensp."', MSHH = '".$masp."', Gia = '".$giasp."', SoLuongHang = '".$soluongsp."', MoTa = '".$motasp."',MaLoaiHang = '".$maloaihang."'
            WHERE MSHH='$_GET[mshh]'";
            mysqli_query($mysqli,$sql_sua);

            //xoa hinh DAI DIEN trong thu muc img_hanghoa
            $sql_selecthinh = "SELECT * FROM hinhhanghoa WHERE MSHH='".$masp."' AND DaiDien = 1";
            $query = mysqli_query($mysqli,$sql_selecthinh);
            while($row = mysqli_fetch_array($query)){
            unlink('../../img_hanghoa/'.$row['TenHinh']);
            }
            //xoa hinh dai dien trong bang hinhhanghoa
            $sql_xoahinhdaidien = "DELETE FROM hinhhanghoa WHERE MSHH = '".$masp."' AND DaiDien = 1";
            mysqli_query($mysqli,$sql_xoahinhdaidien);

            //them hinh moi vao bang hinhhanghoa va thu muc img_hanghoa
            $sql_themhinhdaidien = "INSERT INTO hinhhanghoa (TenHinh, DaiDien, MSHH)
            VALUES ('".$hinhdaidien."', '1', '".$masp."')";
            mysqli_query($mysqli,$sql_themhinhdaidien);
            move_uploaded_file($hinhdaidien_tmp,'../../img_hanghoa/'.$hinhdaidien);
            header('location:../../index.php?action=quanlysp&query=them');
        }else{
            //sua bang hanghoa
            $sql_sua = "UPDATE hanghoa SET TenHH = '".$tensp."', MSHH = '".$masp."', Gia = '".$giasp."', SoLuongHang = '".$soluongsp."', MoTa = '".$motasp."',MaLoaiHang = '".$maloaihang."'
            WHERE MSHH='$_GET[mshh]'"; 
            mysqli_query($mysqli,$sql_sua);
            header('location:../../index.php?action=quanlysp&query=them');
        }
        

    }else{
        //xoa
        $mshh = $_GET['mshh'];
        $sql_selecthinh = "SELECT * FROM hinhhanghoa WHERE MSHH='".$mshh."'";
        $query = mysqli_query($mysqli,$sql_selecthinh);
        while($row = mysqli_fetch_array($query)){
            unlink('../../img_hanghoa/'.$row['TenHinh']);
        }
        $sql_xoasp = "DELETE FROM hanghoa WHERE MSHH = '".$mshh."'";
        mysqli_query($mysqli,$sql_xoasp);
        header('location:../../index.php?action=quanlysp&query=them');

    }
?>