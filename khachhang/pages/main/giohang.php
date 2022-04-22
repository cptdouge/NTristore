<?php
    if(isset($_SESSION['user'])){
    $sql_giohang = "SELECT DISTINCT h.TenHH,hh.TenHinh,g.SoLuong,h.Gia,g.Gia thanhtien,g.username,g.MSHH,h.SoLuongHang
    FROM giohang g JOIN hanghoa h JOIN hinhhanghoa hh JOIN khachhang k 
    ON g.MSHH = h.MSHH AND h.MSHH = hh.MSHH AND g.username = k.username
    WHERE g.username = '$user' AND hh.DaiDien = 1";
    $query_giohang =  mysqli_query($mysqli,$sql_giohang);
    }else{
        echo '<script type= "text/javascript">
            alert("Bạn cần đăng nhập để sử dụng chức năng này!")
            window.location.href = "./account/login.html";
            </script>';
    }   
?>


<h2>Giỏ Hàng</h2>
<form action="./modules/giohang/capnhatgiohang.php" method="POST">
    <div id = "table-container">
        <div id = "table-scroll">
        <table class= "table table-dark">
            <thead>
                <tr>
                    <th><span class="table-head">Thứ tự</span></th>
                    <th><span class="table-head">Tên sản phẩm</span></th>
                    <th><span class="table-head">Hình đại diện</span></th>
                    <th><span class="table-head">Số Lượng</span></th>
                    <th><span class="table-head">Kho</span></th>
                    <th><span class="table-head">Giá</span></th>
                    <th><span class="table-head">Thành tiền</span></th>
                    <th><span class="table-head">Thao tác</span></th>
                </tr>
            </thead>
            <?php
            $i=0;
            $tongtien = 0;
            while($row = mysqli_fetch_array($query_giohang)){
            ?>
            
            <tr>
                <td>
                    <?php echo ($i+1); ?>
                    <input type="hidden" name="cart_username[]" value="<?php echo $row['username']?>">
                </td>
                <td>
                    <?php echo $row['TenHH']; ?>
                    <input type="hidden" name="cart_MSHH[]" value="<?php echo $row['MSHH']?>">
                </td>
                <td>
                    <img src="../admin/img_hanghoa/<?php echo $row['TenHinh'] ?>" width="150px">
                </td>
                <td>
                    <i class="fa-solid fa-minus" id="trusl" onclick="trusl(<?php echo $i;?>)"></i>
                    <input type="text" name="cart_sl[]" class="cart_sl" size="2" value="<?php echo $row['SoLuong']; ?>"></input>  
                    <i class="fa-solid fa-plus" id="themsl" onclick="themsl(<?php echo $i;?>)"></i>
                </td>
                <td>
                    <span name = "sl_kho[]"><?php echo $row['SoLuongHang']; ?></span>
                </td>
                <td>
                    <?php echo number_format($row['Gia'],0,',','.'); ?> VNĐ
                    <input type="hidden" name="cart_giasp[]" value="<?php echo $row['Gia']?>">
                </td>
                <td>
                    <?php 
                    echo number_format($row['thanhtien'],0,',','.'); 
                    $tongtien += $row['thanhtien'];
                    ?> VNĐ
                </td>
                <td>
                    <a id="btn-xoa"  href="./modules/giohang/xoasp.php?mshh=<?php echo $row['MSHH']?>">
                    <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>

            <?php
            $i++;
            }
            ?>

        </table>
        </div>
        
        <p id="tongtien">Tổng tiền: <?php echo number_format($tongtien,0,',','.');?>VNĐ</p>
        <div>
            <a href="index.php?quanly=thanhtoan" class="cart_btn">Đặt hàng</a>
            <input type="submit" class="cart_btn" name="capnhatgiohang" value="Cập nhật giỏ hàng">
        </div>
        
    </div>
</form>

<script type="text/javascript">
    function themsl(x){
        var arr = document.getElementsByName('cart_sl[]')
        var sl = arr[x]
        var arrkho = document.getElementsByName('sl_kho[]')
        var slkho = arrkho[x].innerHTML
        if(sl.value<parseInt(slkho)){
            sl.value++
        }
    }

    function trusl(x){
        var arr = document.getElementsByName('cart_sl[]')
        var sl = arr[x]
        if(sl.value>0){
            sl.value--
        }
    }
</script>