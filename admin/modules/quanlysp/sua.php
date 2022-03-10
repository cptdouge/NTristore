<?php
    $sql_suasp = "SELECT DISTINCT h.MSHH,TenHH,hh.TenHinh,Gia,SoLuongHang,h.MaLoaiHang,l.TenLoaiHang,h.MoTa
    FROM hanghoa h JOIN loaihanghoa l JOIN hinhhanghoa hh
    ON h.MaLoaiHang = l.MaLoaiHang AND h.MSHH = hh.MSHH
    WHERE h.MSHH= '$_GET[mshh]' AND hh.DaiDien=1
    ORDER BY h.MSHH";
    $query_suasp = mysqli_query($mysqli,$sql_suasp);
    $rows = mysqli_fetch_array($query_suasp);
?>
<h4>Update sản phẩm</h4>

<form action="modules/quanlysp/xuly.php?mshh=<?php echo $rows['MSHH']?>" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col">
        <input type="text" class="form-control"
        name="tensp" value="<?php echo $rows['TenHH']?>">

        <input type="text" class="form-control"
        name="masp" value="<?php echo $rows['MSHH']?>">

        <input type="text" class="form-control"
        name="giasp" value="<?php echo $rows['Gia']?>">

        <input type="text" class="form-control"
        name="soluongsp" value="<?php echo $rows['SoLuongHang']?>">

        <label for="selectloaihang">Chọn loại sản phẩm: </label>
        <select name = "maloaihang" id="selectloaihang">
        <?php
        $sql_loaihang = "SELECT * FROM loaihanghoa";
        $query_loaihang = mysqli_query($mysqli,$sql_loaihang);
        while($row = mysqli_fetch_array($query_loaihang)){
        ?>
        <option value="<?php echo $row['MaLoaiHang']?>" <?php if($row['MaLoaiHang']==$rows['MaLoaiHang']) echo "selected"?> >
          <?php echo $row['TenLoaiHang']?>
        </option>
        <?php 
        }
        ?>
        </select>
      
        <label for="motasp">Mô tả</label>
        <textarea class="form-control" id="motasp" name="motasp"  rows="5"><?php echo $rows['MoTa']?></textarea>

        <label for="file1">Hình đại diện sản phẩm</label>
        <input type="file" class="form-control-file" id="file1" name="hinhanhdaidien">
        <img src="img_hanghoa/<?php echo $rows['TenHinh'] ?>" width="150px">
        
        <input type="submit" class="submit_btn"
        name="suasanpham" value="Update sản phẩm">
        <br><br><br>
    </div>
  </div>
</form>