<?php
    $sql_lietkedanhmucsp = "SELECT * FROM loaihanghoa ORDER BY MaLoaiHang";
    $query_lietkedanhmucsp = mysqli_query($mysqli,$sql_lietkedanhmucsp);
?>
<h4>Liệt kê danh mục sản phẩm</h4>
<table class="table table-dark">

    <tr>
      <th>Thứ tự</th>
      <th>ID</th>
      <th>Tên danh mục</th>
      <th>Quản lý</th>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietkedanhmucsp)){
      $i++;
    ?>
    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $row['MaLoaiHang']?></td>
      <td><?php echo $row['TenLoaiHang']?></td>
      <td>
        <a id="btn-xoa"  href="modules/quanlydanhmucsp/xuly.php?maloaihang=<?php echo $row['MaLoaiHang']?>"><i class="fas fa-trash-alt"></i></a>
        <a id="btn-sua"  href="index.php?action=quanlydanhmucsanpham&query=sua&maloaihang=<?php echo $row['MaLoaiHang']?>"><i class="fas fa-pen-alt"></i></a>
      </td>
    </tr>
    <?php
    }
    ?>
</table>
