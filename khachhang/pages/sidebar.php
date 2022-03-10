<?php
    $sql_loaihang = "SELECT * FROM loaihanghoa";
    $query_loaihang = mysqli_query($mysqli,$sql_loaihang);

?>

<input type = "checkbox" id="nav_check">
        <label for="nav_check">
            <i class="fas fa-bars" id="nav_open"></i>
            <i class="fas fa-times" id="nav_close"></i>
        </label>
        <div class = "sidebar">
            <header>THANH ĐIỀU HƯỚNG</header>
            <ul>
                <li><a href = "../khachhang/index.php">Trang Chủ</a></li>
                <li>
                    <a href = "#" id="danhmuc" onclick='lietKe()'>Danh mục<i class="fas fa-arrow-down"></i></a>
                    <ul id ="categories" class="list">
                        <?php
                        while($row = mysqli_fetch_array($query_loaihang)){
                        ?>
                            <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['MaLoaiHang']?>"><?php echo $row['TenLoaiHang'] ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li><a href = "index.php?quanly=giohang">Giỏ hàng</a></li>
                <li><a href = "index.php?quanly=thongtin">Thông tin</a></li>
                <li><a href = "index.php?quanly=lienhe">Liên hệ</a></li>
            </ul>
        </div>