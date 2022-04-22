
<?php 
    $sql_sp = "SELECT h.MSHH,l.MaLoaiHang,l.TenLoaiHang,h.TenHH,h.Gia,h.MoTa,hh.TenHinh,h.SoLuongHang
    FROM loaihanghoa l JOIN hanghoa h JOIN hinhhanghoa hh 
    ON h.MaLoaiHang=l.MaLoaiHang AND h.MSHH=hh.MSHH
    WHERE h.MSHH = '$_GET[id]' AND hh.DaiDien=1";
    $query_sp = mysqli_query($mysqli,$sql_sp);
    $row_chitiet = mysqli_fetch_array($query_sp);
?>

<h2>Chi tiết sản phẩm</h2>
<div class = "chitietsp">
    <div id = "ten_sp"><?php echo $row_chitiet['TenHH'] ?></div>
    <div id = "hinh_sp"><img src="../admin/img_hanghoa/<?php echo $row_chitiet['TenHinh'] ?>" alt="hinh_sp"></div>
    <div id = "gia_sp"><?php echo number_format($row_chitiet['Gia'],0,',','.')?> VNĐ</div>
    <div id= "thongtin_sp">
        Danh mục: <span id="danhmuc_sp"><?php echo $row_chitiet['TenLoaiHang']?></span><br>
        Số lượng: <span id="soluong_sp"><?php echo $row_chitiet['SoLuongHang']?></span>
    </div>
    <div id = buttons_mua>
        <a href="./modules/giohang/xulymua.php?mshh=<?php echo $row_chitiet['MSHH']?>" id = "btn_mua" onclick="return addcart()">MUA HÀNG</a>
        <a href="./modules/giohang/xulygiohang.php?mshh=<?php echo $row_chitiet['MSHH']?>" id = "btn_themvaogio" onclick="return addcart()">THÊM VÀO GIỎ</a>
    </div>
    <div id = "mota_sp"><h4>Mô tả sản phẩm</h4>
        <?php echo $row_chitiet['MoTa']?>
    </div>
</div>
<script>
    function addcart(){
        var slsp = document.getElementById("soluong_sp").innerHTML
        if(slsp>0){
            return true;
        }else{
            alert('sản phẩm đã hết hàng!')
            return false;
        }
    }
</script>