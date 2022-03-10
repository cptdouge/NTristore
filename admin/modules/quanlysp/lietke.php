<?php
    $sql_lietkesp = "SELECT DISTINCT h.MSHH,TenHH,hh.TenHinh,Gia,SoLuongHang,h.MaLoaiHang,l.TenLoaiHang FROM hanghoa h JOIN loaihanghoa l JOIN hinhhanghoa hh
    ON h.MaLoaiHang = l.MaLoaiHang AND h.MSHH = hh.MSHH
    WHERE hh.DaiDien = 1
    ORDER BY h.MSHH ";
    $query_lietkesp = mysqli_query($mysqli,$sql_lietkesp);
?>
<h4>Liệt kê sản phẩm</h4>
<table class="table table-dark">

    <tr>
      <th>Thứ tự</th>
      <th>Mã số sản phẩm</th>
      <th>Tên sản phẩm</th>
      <th>Hình đại diện</th>
      <th>Giá</th>
      <th>Số Lượng</th>
      <th>Mã danh mục</th>
      <th>Tên danh mục</th>
      <th>Quản lý</th>
      
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietkesp)){
      $i++;
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $row['MSHH']?></td>
      <td><?php echo $row['TenHH']?></td>
      <td><img src="img_hanghoa/<?php echo $row['TenHinh'] ?>" width="150px"></td>
      <td><?php echo $row['Gia']?></td>
      <td><?php echo $row['SoLuongHang']?></td>
      <td><?php echo $row['MaLoaiHang']?></td>
      <td><?php echo $row['TenLoaiHang']?></td>
      <td>
        <a id="btn-xoa"  href="modules/quanlysp/xuly.php?mshh=<?php echo $row['MSHH']?>"><i class="fas fa-trash-alt"></i></a>
        <a id="btn-sua"  href="index.php?action=quanlysp&query=sua&mshh=<?php echo $row['MSHH']?>"><i class="fas fa-pen-alt"></i></a>
      </td>
    </tr>
    <?php
    }
    ?>
</table>
