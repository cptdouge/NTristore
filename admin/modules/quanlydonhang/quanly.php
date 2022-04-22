<?php
$sql_lietke= "SELECT d.MaDH,d.usernameKH,k.HoTenKH,k.SoDienThoai,dc.DiaChi,d.TrangThaiDH
                FROM dathang d JOIN khachhang k JOIN diachikh dc
                ON d.usernameKH = k.username AND d.MaDC = dc.MaDC";
$query_donhang = mysqli_query($mysqli,$sql_lietke);

?>

<form action="./modules/quanlydonhang/capnhat.php" method="post" class="form">
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                <th>Mã Đơn Hàng</th>
                <th>Username</th>
                <th>Họ tên</th>
                <th>SĐT</th>
                <th>Địa chỉ</th>
                <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i=0;
                while($row = mysqli_fetch_array($query_donhang))
                {
                ?>

                <tr>
                    <td>
                        <?php echo $row['MaDH'];?>
                        <input type="hidden" name="madh[]" value="<?php echo $row['MaDH']?>">
                    </td>
                    <td>
                        <?php echo $row['usernameKH']?>
                    </td>
                    <td>
                        <?php echo $row['HoTenKH']?>
                    </td>
                    <td>
                        <?php echo $row['SoDienThoai']?>
                    </td>
                    <td>
                        <?php echo $row['DiaChi']?>
                    </td>
                    <td>
                        
                        <select name="trangthaidh[]" >
                            <option value="1"<?php if($row['TrangThaiDH']==1) echo "selected";?>>Đã đặt hàng</option>
                            <option value="2"<?php if($row['TrangThaiDH']==2) echo "selected";?>>Đã xác nhận</option>
                            <option value="3"<?php if($row['TrangThaiDH']==3) echo "selected";?>>Đang giao hàng</option>
                            <option value="4"<?php if($row['TrangThaiDH']==4) echo "selected";?>>Đã thanh toán</option>
                            <option value="0"<?php if($row['TrangThaiDH']==0) echo "selected";?>>Đã Hủy</option>
                        </select>
                    </td>
                </tr>
        
                <?php
                $i++;
                }
                ?>

            </tbody>
        </table>
    </div>
    <input type="submit" class="submit_btn" name="capnhatdonhang" value="Cập nhật">
</form>