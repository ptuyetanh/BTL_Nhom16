<?php
     session_start();
     if(!isset($_SESSION['isSigninOK'])){
         header("location:signin.php");
     }
     $ma_nguoidung = $_SESSION['isSigninOK'];
    //Kết nối cơ sở dữ liệu 
    $conn = mysqli_connect('localhost','root','','twitter');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
    //truy vấn cơ sở dữ liệu
        $sql = "SELECT * FROM db_nguoidung WHERE ma_nguoidung = $ma_nguoidung ";
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
            while($row =mysqli_fetch_assoc($result)){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./img/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar">
                <nav class="navbar navbar-expand-md ">
                    <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-twitter text-primary p-2"></i>
                    </a>
                    <div class="collapse navbar-collapse" id="sidebarMenu">
                        <ul class="navbar-nav flex-column">
                            <div class="nav-item fs-5  p-0,5 mb-2 twitter-home">
                                <a class=" navbar-brand ms-2" href="home.php">
                                    <i class="bi bi-twitter text-primary p-2 "></i></a>
                            </div>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="home.php"><i class="bi bi-house-door me-3"></i>
                                    Trang chủ
                                </a>
                                
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark" href="explore.php"><i class="bi bi-hash me-3"></i>
                                    Khám phá</a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark" href="Notifications.php"><i class="bi bi-bell me-3"></i>
                                    Thông báo</a>
                            </li>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="message.php"><i class="bi bi-envelope me-3"></i>
                                    Tin Nhắn</a>
                            </li>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="bookmark.php"><i class="bi bi-bookmark me-3"></i>
                                    Dấu trang</a>
                            </li>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="lists.php"><i class="bi bi-file-text me-3"></i>
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark" href="profile.php"><i class="bi bi-person me-3"></i>
                                    Hồ sơ
                                </a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark " href="#"><i class="bi bi-three-dots me-3"></i>
                                    Thêm
                                </a>
                            </li>
                            <li>
                                <a class="nav-link btn btn-primary text-light btn_tweet fs-3" data-bs-toggle="modal"
                                    data-bs-target="#model-tweet" href="#">
                                    Tweet
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="model-tweet" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body row">
                                                <!-- tweet-status phan lap lai sd php -->
                                                <?php
                                                    include("tweet-status.php");
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-link dropup p-2">
                                <a href="#"
                                    class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="./img/no-image.png" alt="" class="rounded-circle me-3 mt-2"
                                                width="32" height="32">
                                        </div>
                                        <div class="col-md-8">
                                               <span><?php echo $row['tennguoidung'];?></span><br>
                                               <strong>@<?php echo $row['tendangnhap'];?></strong>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu text-small shadow " aria-labelledby="dropdownUser2">
                                    <li><a class="dropdown-item" href="#">
                                            <div class="row">
                                                <div class="col-md-1 mt-2 me-1">
                                                    <img src="./img/no-image.png" alt="" class="rounded-circle"
                                                        width="23" height="23">
                                                </div>
                                                <div class="col-md-10">
                                                    <span><?php echo $row['tennguoidung'];?></span><br>
                                                    <strong>@<?php echo $row['tendangnhap'];?> </strong>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Cài Đặt</a></li>
                                    <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                                   
                                    
                                   
           
                                </ul>
                            </li>
                           
                            
                        </ul>
                    </div>
                </nav>
                 
            </div>
<?php
    }
 }
 ?>