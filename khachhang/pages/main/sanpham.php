
<?php 
    $sql_sp = "SELECT H.MSHH,L.MaLoaiHang,L.TenLoaiHang,H.TenHH,H.Gia,H.MoTa,hh.TenHinh,H.SoLuongHang
    FROM loaihanghoa l JOIN hanghoa h JOIN hinhhanghoa hh 
    ON h.MaLoaiHang=l.MaLoaiHang AND h.MSHH=hh.MSHH
    WHERE H.MSHH = '$_GET[id]' AND hh.DaiDien=1";
    $query_sp = mysqli_query($mysqli,$sql_sp);
    $row_chitiet = mysqli_fetch_array($query_sp);
?>
<h2>Chi tiết sản phẩm</h2>
<div class = "chitietsp">
    <div id = "ten_sp"><?php echo $row_chitiet['TenHH'] ?></div>
    <div id = "hinh_sp"><img src="../../B1809312_NguyenHuynhKhaiTri/admin/img_hanghoa/<?php echo $row_chitiet['TenHinh'] ?>" alt="hinh_sp"></div>
    <div id = "gia_sp"><?php echo number_format($row_chitiet['Gia'],0,',','.')?> VNĐ</div>
    <div id= "thongtin_sp">
        Danh mục: <?php echo $row_chitiet['TenLoaiHang']?>
        <br>Số lượng: <?php echo $row_chitiet['SoLuongHang']?>
    </div>
    <div id = buttons_mua>
        <a href="#" id = "btn_mua">MUA HÀNG</a>
        <a href="/B1809312_NguyenHuynhKhaiTri/khachhang/pages/main/xulygiohang.php?mshh=<?php echo $row_chitiet['MSHH']?>" id = "btn_themvaogio">THÊM VÀO GIỎ</a>
    </div>
    <div id = "mota_sp"><h4>Mô tả sản phẩm</h4>
        <?php echo $row_chitiet['MoTa']?>
    </div>
</div>
