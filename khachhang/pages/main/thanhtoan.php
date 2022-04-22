<?php
    if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $sql_khachhang = "SELECT *
                    FROM khachhang k JOIN diachikh d 
                    ON k.username = d.username
                    WHERE k.username = '$user'";
    $query_khachhang =  mysqli_query($mysqli,$sql_khachhang);
    $row_khachhang = mysqli_fetch_array($query_khachhang);
    }
?>
<h2>Thanh toán</h2>

<div id="thanhtoan">
    <form action="./modules/thanhtoan/xulythanhtoan.php" method="post">
        <h3>Thông tin của bạn</h3>
        
            <p class="inf_kh">Họ và tên: <?php echo $row_khachhang['HoTenKH']; ?></p>
            <p class="inf_kh">Email: <?php echo $row_khachhang['email']; ?></p>
            <p class="inf_kh">Số điện thoại: <?php echo $row_khachhang['SoDienThoai']; ?></p>
            <p class="inf_kh">Địa chỉ:</p>
            <select name="madc" class="inf_kh">
                <?php
                $sql_diachi = "SELECT * FROM diachikh WHERE username = '".$user."'";
                $query_diachi = mysqli_query($mysqli,$sql_diachi);
                while($row_diachi = mysqli_fetch_array($query_diachi)){
                ?>
                <option value="<?php echo $row_diachi['MaDC']?>" >
                    <?php echo $row_diachi['DiaChi'];?>
                </option>
                <?php
                }
                ?>
            </select><br>
            <input type="submit" class="cart_btn" name="thanhtoan" value="Thanh toán">

    </form>
</div>
