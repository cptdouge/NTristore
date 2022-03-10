<?php 
    include ("../../admin/config/config.php");
    if(isset($_POST)&& $_POST['username']!= '' && $_POST['pwd']!=''){
        $username= $_POST['username'];
        $pwd = $_POST['pwd'];
        $sql = "SELECT * FROM khachhang WHERE username = '$username' AND password = '$pwd' ";
        $user = mysqli_query($mysqli,$sql);
        if(mysqli_num_rows($user)>0){
            session_start();
            $_SESSION["user"] = $username;
            header("location:../index.php");
        }else{
            header("location:login.html");
        }
    }else{
            header("location:login.html");
    }
    mysqli_close($mysqli);

    
?>