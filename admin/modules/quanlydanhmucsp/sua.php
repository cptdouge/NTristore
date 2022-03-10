<?php
    $sql_suadanhmucsp = "SELECT * FROM loaihanghoa WHERE MaLoaiHang = '$_GET[maloaihang]' LIMIT 1";
    $query_suadanhmucsp = mysqli_query($mysqli,$sql_suadanhmucsp);
    $rows = mysqli_fetch_array($query_suadanhmucsp);
?>
<h4>Sửa danh mục sản phẩm</h4>

<form action="modules/quanlydanhmucsp/xuly.php?maloaihang=<?php echo $_GET['maloaihang']; ?>" method="POST">
  <div class="form-row">
    <div class="col">
        <input type="text" class="form-control" name="tendanhmuc" value="<?php echo $rows['TenLoaiHang']; ?>">
        <input type="submit" class="submit_btn" name="suadanhmuc" value="Sửa danh mục sản phẩm">
    </div>
  </div>
</form>