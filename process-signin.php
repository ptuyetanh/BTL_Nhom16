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
        $sql = "SELECT * FROM db_nguoidung WHERE email = ? ";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"s",$email);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$ma_nguoidung,$tendangnhap,$email,$matkhau,$tennguoidung,$status,$email_verification_link,$email_verified_at,$pofileImage,$pofileCover,$following,$followers);
            if(mysqli_stmt_fetch($stmt)){
                // echo $pass;
                // echo $matkhau;
                if(password_verify($pass,$matkhau) && $status===1){
                    $_SESSION['isSigninOK'] = $ma_nguoidung; 
                    header("location:home.php");
                    mysqli_close($conn);
                }else{
                    mysqli_close($conn);
                    $error="Tài khoản và mật khẩu không chính xác!";
                    header("location: signin.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
                }
            }else{
               echo 'Dữ liệu không khớp';
               mysqli_close($conn);
            }
        }else{
            echo 'Không có dữ liệu';
            mysqli_close($conn);
        }
        
    }
?>

