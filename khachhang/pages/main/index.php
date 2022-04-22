<?php 
    //PHAN TRANG
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page=='' || $page== 1){
        $begin_idx=0;
    }else{
        $begin_idx= 5*($page-1);
    }


    $sql_sp = "SELECT h.MSHH,l.MaLoaiHang,l.TenLoaiHang,h.TenHH,h.Gia,h.MoTa,hh.TenHinh
    FROM loaihanghoa l JOIN hanghoa h JOIN hinhhanghoa hh 
    ON h.MaLoaiHang=l.MaLoaiHang AND h.MSHH=hh.MSHH
    WHERE hh.DaiDien=1 LIMIT ".$begin_idx.",5";
    $query_sp = mysqli_query($mysqli,$sql_sp);
?>
<h2 id="category_title">Sản Phẩm Mới Nhất</h2>
<div id= items_container>
    <?php
    while($row_sp = mysqli_fetch_array($query_sp)){
    ?>
            <div class= "item">
                <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['MSHH']?>">
                    <img src="../admin/img_hanghoa/<?php echo $row_sp['TenHinh'] ?>" alt="hinh_sp" class ="item_img">
                    <div class= "item_content">
                        <h3 class ="item_name"><?php echo $row_sp['TenHH']?></h3>
                        <div class= "item_price"><?php echo number_format($row_sp['Gia'],0,',','.')?> VNĐ</div>
                    </div>
                </a>
            </div>
    <?php
    }
    ?>

            
</div>
<div class= "pages">
    Trang:
    <?php
        $sql_pages = "SELECT * FROM hanghoa";
        $query_pages = mysqli_query($mysqli,$sql_pages);
        $row_count = mysqli_num_rows($query_pages);
        $pages = ceil($row_count/5);
        for($i=1;$i<=$pages;$i++){
    ?>
    <a href="index.php?trang=<?php echo $i;?>"
    <?php 
        if($i==$page){
            echo 'style="text-decoration:underline; pointer-events:none;"';
        }
    ?>
    >
        <?php echo $i;?>
        
    </a>
    <?php
        }
    ?>
    
    
</div>