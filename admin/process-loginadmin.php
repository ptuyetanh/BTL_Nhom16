<?php
    session_start();
    if(isset($_POST['btnLogIn'])&& isset($_POST['txtUser'])){
        $email = $_POST['txtUser'];
        $pass  = $_POST['txtPass'];
        //Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','twitter');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM admin WHERE email =?";
        $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"s",$email);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$id_admin,$admin,$email,$password);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($pass,$password)){
                    $_SESSION['admin'] = $id_admin; 
                    mysqli_close($conn);
                    header("location:index.php");
                }else{
                    mysqli_close($conn);
                    $error="Tài khoản và mật khẩu không chính xác!";
                    header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
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

