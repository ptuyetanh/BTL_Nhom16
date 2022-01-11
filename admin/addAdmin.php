<?php
//Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
$email='admin@gmail.com';
$pass='111';
$pass_hash = password_hash($pass,PASSWORD_DEFAULT);
$sql1="INSERT INTO admin(email,password) values('".$email."','".$pass_hash."')";
$sql2="SELECT * FROM admin where email = '".$email."'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)<=0){
    mysqli_query($conn,$sql1);
}

?>