<?php
if(isset($_POST['btnsignup'])){
    header("location:signup.php");
}
//coi dữ liệu là hợp lệ
$name = $_POST['txtname'];
$user = $_POST['txtuser'];
$email = $_POST['txtemail'];
$pass1 = $_POST['txtPass1'] ;
$pass2 = $_POST['txtPass2'] ;
// Bước 01: Kết nối Database Server
$conn = mysqli_connect('localhost','root','','twitter');
if(!$conn){
    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
}
// Bước 02: Thực hiện truy vấn
$sql01 = "SELECT * FROM db_nguoidung WHERE email = '$email'  OR	tendangnhap='$user'";
// Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
// Nghiêm trọng: lỗi SQL Injection

$result01 = mysqli_query($conn,$sql01);
if(mysqli_num_rows($result01) > 0){
    $error = "Bạn nhập thông tin Email đã tồn tại";
    header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    // CẤP THẺ LÀM VIỆC
    
}else{
$pass_md5 = md5($pass1);
$pass_hash = password_hash($pass1,PASSWORD_DEFAULT );
 $sql02 = "INSERT INTO db_nguoidung (tendangnhap,email ,matkhau,tennguoidung) VALUES ('$user','$email','$pass_hash','$name')";
 $result02 = mysqli_query($conn,$sql02);

 if ( $result02 == TRUE){
    header("location: signin.php");
 }
 else{
    $error = "Kiểm tra lại";
    header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
 }
  
}

// Bước 03: Đóng kết nối
mysqli_close($conn);

?>
