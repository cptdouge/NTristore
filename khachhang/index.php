<!DOCTYPE html>
<?php 
    session_start();
    if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
    }

?>
<html>
    <head>
        <meta charset = 'utf-8'>
        
        <!--css font icon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
        <!--css bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" media="all" type="text/css">
        <title>Web bán hàng</title>
        <link rel = "icon" href = 
        "../img/store.png" 
        type = "image/x-icon">
        <script src = "index.js"></script>
    </head>
    <body>
        <?php
        include ("../admin/config/config.php");
        include ("../khachhang/pages/sidebar.php");
        include ("../khachhang/pages/headbar.php");
        include ("../khachhang/pages/itemscontainer.php");
        include ("../khachhang/pages/footer.php");
        ?>

        <!--js bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>