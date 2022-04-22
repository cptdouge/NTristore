<div id= "main_content">
    <?php
        
        if(isset($_GET['quanly'])){
            $temp = $_GET['quanly'];
        }else{
            $temp = '';
        }
        if($temp == 'danhmucsanpham'){
            include("main/danhmuc.php");
        }elseif($temp == 'giohang'){
            include("main/giohang.php");
        }elseif($temp == 'thongtin'){
            include("main/thongtin.php");
        }elseif($temp == 'lienhe'){
            include("main/lienhe.php");
        }elseif($temp == 'sanpham'){
            include("main/sanpham.php");
        }elseif($temp == 'thanhtoan'){
            include("main/thanhtoan.php");
        }elseif($temp == 'taikhoan'){
            include("main/taikhoan.php");
        }else{
            include("main/index.php");
        }
    ?>
</div>