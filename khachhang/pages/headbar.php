<div id="wrapper">
    <div id="headbar">
        <div id= "logo"><a href="index.php"><img src="../img/web_logo.png" id="web_logo" alt="web_logo"  href="index.php"></a></div>
        <?php
        if(isset($user)){
            echo '<div class = "acc_info"><p>Xin chào <a href="index.php?quanly=taikhoan">' .$user. ' </a><p>
            <a class = "logout" href="./account/logout.php">Đăng xuất</a> </div> ';
            
        }else{
            echo '<div class= "btn" id= "btn_login"><a href="./account/login.html" class="btn btn-outline-primary">Đăng nhập</a></div>';
            echo '<div class= "btn" id= "btn_register"><a href="./account/register.html" class="btn btn-outline-primary">Đăng ký</a></div>';
        }
        ?>
        
        
    </div>
</div>