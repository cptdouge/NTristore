<?php
    $sql_sp = "SELECT h.MSHH,l.MaLoaiHang,l.TenLoaiHang,h.TenHH,h.Gia,h.MoTa,hh.TenHinh
    FROM loaihanghoa l JOIN hanghoa h JOIN hinhhanghoa hh 
    ON h.MaLoaiHang=l.MaLoaiHang AND h.MSHH=hh.MSHH
    WHERE l.MaLoaiHang = '$_GET[id]' AND hh.DaiDien=1
    LIMIT 20";
    $query_sp = mysqli_query($mysqli,$sql_sp);
    $sql_danhmuc = "SELECT * FROM loaihanghoa WHERE MaLoaiHang = '$_GET[id]'";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    $row_danhmuc = mysqli_fetch_array($query_danhmuc);

?>
<h2 id="category_title">Danh mục: <?php echo $row_danhmuc['TenLoaiHang']?></h2>
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