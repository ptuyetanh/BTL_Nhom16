<?php
if(isset($_POST['btnsignup']) && $_POST['txtemail'])//kiểm tra người dùng nhấp vào nút submit chưa và đã nhập email chưa
{   // header("location:signup.php");
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
        $result01 = mysqli_query($conn,"SELECT * FROM db_nguoidung WHERE email='$email'");
        if(mysqli_num_rows($result01) > 0){
            $error = "Bạn nhập thông tin Email đã tồn tại";
            header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }else//Kiểm tra email chưa được dùng (mysqli_num_rows($result01) <= 0)
        {
            $token = md5($_POST['txtemail']).rand(10,9999);//sử dụng giải thuật md5 để sinh ra chuỗi ngẫu nhiên được băm
            $pass_hash = password_hash($pass1,PASSWORD_DEFAULT );
            //ra lệnh lưu vào CSDL
            $sql02 = "INSERT INTO db_nguoidung (tendangnhap,email ,matkhau,tennguoidung,email_verification_link) VALUES ('$user','$email','$pass_hash','$name','$token')";
            $result02 = mysqli_query($conn,$sql02);
            //Sau khi lưu xong chúng ta cần gửi tới email đăng kí đường link tới website của chúng ta 
            //yêu cầu người dùng kích hoạt ;biến link sẽ được gửi vào email
            $link = "<a href='localhost/Twitter/BTL_Nhom16/activation.php?key=".$email."&token=".$token."'>Nhấp vào đây để kích hoạt</a>";
           include "send-mail.php";
           if(sendEmailForAccountActive($email,$link)){
               echo "Vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản";
           }
           else{
               echo "Xin lỗi email chưa được gửi đi .Vui lòng kiểm tra lại thông tin đăng kí tài khoản";
           }
        }
        // else
        // {
        // echo "You have already registered with us. Check Your email box and verify email.";
        // }
        //  if ( $result02 == TRUE){
        //     header("location: signin.php");
        //  }
        //  else{
        //     $error = "Kiểm tra lại";
        //     header("location: signup.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        //  }
        

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
}
?>