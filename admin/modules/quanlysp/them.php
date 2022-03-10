<h4>Thêm sản phẩm</h4>

<form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col">
        <input type="text" class="form-control"
        name="tensp" placeholder="Tên sản phẩm">

        <input type="text" class="form-control"
        name="masp" placeholder="Mã sản phẩm">

        <input type="text" class="form-control"
        name="giasp" placeholder="Giá">

        <input type="text" class="form-control"
        name="soluongsp" placeholder="Số lượng">

        <label for="selectloaihang">Chọn loại sản phẩm: </label>
        <select name = "maloaihang" id="selectloaihang">
        <?php
        $sql_loaihang = "SELECT * FROM loaihanghoa";
        $query_loaihang = mysqli_query($mysqli,$sql_loaihang);
        while($row = mysqli_fetch_array($query_loaihang)){
        ?>
        <option value="<?php echo $row['MaLoaiHang']?>"><?php echo $row['TenLoaiHang']?></option>
        <?php 
        }
        ?>
        </select>
      
        <label for="motasp">Mô tả</label>
        <textarea class="form-control" id="motasp" name="motasp"  rows="5"></textarea>

        <label for="file1">Hình đại diện sản phẩm</label>
        <input type="file" class="form-control-file" id="file1" name="hinhanhdaidien">
        
        <input type="submit" class="submit_btn"
        name="themsanpham" value="Thêm sản phẩm">
        <br><br><br>
    </div>
  </div>
</form>