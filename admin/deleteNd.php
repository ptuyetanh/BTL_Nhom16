<?php


$ma_nguoidung = $_GET['id'];


$conn=mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("kết nối thất bại");
}

$sql ="DELETE FROM db_nguoidung WHERE ma_nguoidung='$ma_nguoidung'";

$number=mysqli_query($conn,$sql);

if($number > 0){
    header("location:index.php");
}else{
    header("location:error.php");
}
?>