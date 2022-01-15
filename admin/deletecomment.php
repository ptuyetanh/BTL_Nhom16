<?php


$commentID = $_GET['id'];


$conn=mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("kết nối thất bại");
}

$sql ="DELETE FROM comment WHERE commentID='$commentID'";

$number=mysqli_query($conn,$sql);

if($number > 0){
    header("location:comment.php");
}else{
    header("location:error.php");
}
?>