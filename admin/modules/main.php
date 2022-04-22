<div class = "main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $temp = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $temp = '';
            $query = '';
        }
        if($temp == 'quanlydanhmucsanpham' && $query=='them'){
            include("modules/quanlydanhmucsp/lietke.php");
            include("modules/quanlydanhmucsp/them.php");

        }elseif($temp == 'quanlydanhmucsanpham' && $query=='sua'){
            include("modules/quanlydanhmucsp/sua.php");

        }elseif($temp == 'quanlysp' && $query=='them'){
            include("modules/quanlysp/lietke.php");
            include("modules/quanlysp/them.php");

        }elseif($temp == 'quanlysp' && $query=='sua'){
            include("modules/quanlysp/sua.php");

        }elseif($temp == 'quanlydonhang' && $query=='quanly'){
            include("modules/quanlydonhang/quanly.php");

        }else{
            include("modules/dashboard.php");
        }
    ?>
</div>