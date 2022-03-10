<?php 
$username=$_GET['u'];
$con=mysqli_connect("localhost","root","","webbanhang");
$con->set_charset("utf8");
if(!$con){
    die("Connection failed:".mysqli_connect_error());
}
$sql="select * from khachhang where username='$username'";
$result=$con->query($sql);
if($result->num_rows>0){
    echo "Username này đã được sử dụng.";
}else {
     echo "";
}
 $con->close();
?>