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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        include ("./pages/sidebar.php");
        include ("./pages/headbar.php");
        include ("./pages/searchbar.php");
        include ("./pages/slider.php");
        include ("./pages/itemscontainer.php");
        include ("./pages/footer.php");
        ?>

        <!--js bootstrap-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    
    </body>
    
</html>