<?php
if($_POST['password1'])//kiểm tra người dùng nhấp vào nút submit chưa và đã nhập mật khẩu chưa
{   
         $pass1 = $_POST['password1'] ;
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','twitter');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql01 = "SELECT * FROM db_nguoidung WHERE matkhau = '$pass1'";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        $result = mysqli_query($conn,$sql01);
        if(mysqli_num_rows($result) <= 0){
            echo "Mật khẩu hợp lệ,có thể đăng kí";
        }else
        {
            echo "Mật khẩu Tối thiểu tám ký tự, ít nhất một chữ cái viết hoa, một chữ cái viết thường và một số";
        }
}
?>