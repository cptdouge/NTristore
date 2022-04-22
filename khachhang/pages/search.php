
<?php
include("../../admin/config/config.php");
$string = $_GET['keyword'];
$kq="";
$sql = "SELECT h.MSHH,l.MaLoaiHang,l.TenLoaiHang,h.TenHH,h.Gia,h.MoTa,hh.TenHinh
FROM loaihanghoa l JOIN hanghoa h JOIN hinhhanghoa hh 
ON h.MaLoaiHang=l.MaLoaiHang AND h.MSHH=hh.MSHH
WHERE h.TenHH like '%".$string."%' AND hh.DaiDien=1";
$query = mysqli_query($mysqli,$sql);
while($row = mysqli_fetch_array($query)){
    $kq = $kq.
    '<a href="index.php?quanly=sanpham&id='.$row['MSHH'].'">
        <div id="search-item">
            <img src="../admin/img_hanghoa/'.$row['TenHinh'].'" height="90px">
            <span>'.$row['TenHH'].'</span>
        </div>
    </a>';
}

echo $kq;
?>