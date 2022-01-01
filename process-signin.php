<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])&& isset($_POST['txtUser'])){
        $email = $_POST['txtUser'];
        $pass  = $_POST['txtPass'];//mật khẩu thô
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa
     
        //Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','twitter');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_nguoidung WHERE email = '$email' ";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result);
            $pass_hash = $row['matkhau'];//lấy đc mk lưu trong sql

            if(password_verify($pass, $pass_hash)){
                //  CẤP THẺ LÀM VIỆC
            $_SESSION['isSigninOK'] = $email;
            header("location: index.php"); //Chuyển hướng về Trang quản trị

            }
            else{
                $error = 'mật khẩu k chính xác';
                header('location : signin.php');
            }
            
         }
            else{
             $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
             header("location: signin.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
                }
   
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:signin.php");
    }
?>

