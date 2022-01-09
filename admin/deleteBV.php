<?php


$tweetID = $_GET['id'];


$conn=mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("kết nối thất bại");
}

$sql ="DELETE FROM tweet WHERE tweetID='$tweetID'";

$number=mysqli_query($conn,$sql);

if($number > 0){
    header("location:qlbv.php");
}else{
    header("location:error.php");
}
?>