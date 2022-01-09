<?php
  //xử lý giá trị gửi 
  if(isset($_POST['content_status'])){
    $content_status=$_POST['content_status'];
  }
  session_start();
     if(!isset($_SESSION['isSigninOK'])){
         header("location:signin.php");
     }
     $ma_nguoidung = $_SESSION['isSigninOK'];
  $conn = mysqli_connect('localhost','root','','twitter');
  if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
  }
  //Thực hiện truy vấn
  $sql = "INSERT INTO tweet(content_status,ma_nguoidung) VALUES('$content_status','$ma_nguoidung')";
  $result_tweet = mysqli_query($conn,$sql);
  if(!$result_tweet){
      header("location: index.php");
  }else{
      header("location:home.php");
  }
?>