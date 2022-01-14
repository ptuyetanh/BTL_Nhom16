<?php
$tweetID = $_GET['id'];
$comment = $_POST['comment'];



$conn=mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("kết nối thất bại");
}
$sql ="INSERT INTO  comment( tweetID,comment ) VALUES('$tweetID', '$comment')";

mysqli_query($conn,$sql);
header("location: chitiet.php?id=$tweetID");



?>