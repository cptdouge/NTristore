<?php 
    $sql_sp = "SELECT H.MSHH,L.MaLoaiHang,L.TenLoaiHang,H.TenHH,H.Gia,H.MoTa,hh.TenHinh
    FROM loaihanghoa l JOIN hanghoa h JOIN hinhhanghoa hh 
    ON h.MaLoaiHang=l.MaLoaiHang AND h.MSHH=hh.MSHH
    WHERE hh.DaiDien=1";
    $query_sp = mysqli_query($mysqli,$sql_sp);
?>
<h2 id="category_title">Sản Phẩm Mới Nhất</h2>
<div id= items_container>
    <?php
    while($row_sp = mysqli_fetch_array($query_sp)){
    ?>
            <div class= "item">
                <a href="index.php?quanly=sanpham&id=<?php echo $row_sp['MSHH']?>">
                    <img src="../../B1809312_NguyenHuynhKhaiTri/admin/img_hanghoa/<?php echo $row_sp['TenHinh'] ?>" alt="hinh_sp" class ="item_img">
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