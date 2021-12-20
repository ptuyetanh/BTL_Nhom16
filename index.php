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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar mt-auto">
                <nav class="navbar navbar-expand-md ">
                    <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
                        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="bi bi-twitter text-primary p-2 "></i>
                    </a>
                    <div class="collapse navbar-collapse" id="sidebarMenu">
                        <ul class="navbar-nav flex-column">
                            <div class="nav-item fs-5  p-0,5 mb-2 twitter-home">
                                <a class=" navbar-brand ms-2" href="">
                                    <i class="bi bi-twitter text-primary p-2 "></i></a>
                            </div>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-house-door me-3"></i>
                                    Trang chủ
                                </a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-hash me-3"></i>
                                    Khám phá</a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-bell me-3"></i>
                                    Thông báo</a>
                            </li>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-envelope me-3"></i>
                                    Tin Nhắn</a>
                            </li>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-bookmark me-3"></i>
                                    Dấu trang</a>
                            </li>
                            <li class="nav-item fs-5  p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-file-text me-3"></i>
                                    Danh sách
                                </a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark" href="#"><i class="bi bi-person me-3"></i>
                                    Hồ sơ
                                </a>
                            </li>
                            <li class="nav-item fs-5 p-0,5 mb-2">
                                <a class="nav-link link-dark " href="#"><i class="bi bi-three-dots me-3"></i>
                                    Thêm
                                </a>
                            </li>
                            <li>
                                <a class="nav-link btn btn-primary text-light btn_tweet fs-1,8" data-bs-toggle="modal"
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
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-link dropup p-2">
                                <a href="#"
                                    class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                                    id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="./img/no-image.png" alt="" class="rounded-circle me-3" width="32"
                                        height="32">
                                    <strong>Tên đăng nhập</strong>
                                </a>
                                <ul class="dropdown-menu text-small shadow " aria-labelledby="dropdownUser2">
                                    <li><a class="dropdown-item" href="#">
                                            <img src="./img/no-image.png" alt="" class="rounded-circle me-3" width="32"
                                                height="32">
                                            <strong>Tên đăng nhập </strong></a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Cài Đặt</a></li>
                                    <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Đăng xuất </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- main  -->
            <main class="col-md-6 main border-start border-end">
                <!-- header-home  -->
                <nav class="navbar navbar-light header-home">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <strong>Trang chủ</strong>
                        </a>
                        <a class="nav-item text-dark fs-4" href="">
                            <i class="bi bi-stars"></i>
                        </a>
                    </div>
                </nav>
                <!-- tweet-status  -->
                <div class="tweet-status">
                    <!-- status  -->
                    <div class="card mb-3 status border-0" style="max-width: 650px;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="./img/no-image.png" alt="" class="rounded-circle ms-4" width="40" height="40">
                            </div>
                            <div class="col-md-10">
                                <form action="" method="">
                                    <textarea name="content_status" placeholder="Bạn đang nghĩ gì?"
                                        aria-label="Bạn đang nghĩ gì" autofocus id="content_status"></textarea>
                                    <div id="tweet_post">
                                        <div class="container-fluid row">
                                            <div class="col-md-9">
                                                <span class="material-icons text-primary me-2 ">
                                                    image</span>
                                                <span class="material-icons fs-4,5 text-primary me-2">
                                                    gif_box
                                                </span>
                                                <span class="material-icons fs-4,5 text-primary me-2">
                                                    sentiment_satisfied
                                                </span>
                                                <span class="material-icons fs-4,5 text-primary me-2">
                                                    align_horizontal_left
                                                </span>
                                                <span class="material-icons fs-4,5 text-primary me-2">
                                                    event_available
                                                </span>
                                                <span class="material-icons fs-4,5 text-primary me-2">
                                                    location_on
                                                </span>
                                            </div>
                                            <div class="col-md-3 bg-light">
                                                <input class="bg-primary" type="submit" id="submit-tweet-button"
                                                    value="Tweet" role="button" disabled="true">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- post-tweet  -->
                <section class="post-tweet">
                    
                </section>
            </main>
            <div class="col-md-3 search w-5 h-5">
                <nav class="navbar navbar-light">
                    <div class="container">
                        <!-- search  -->
                        <form class="d-flex">
                            <input class="form-control bg-light" type="search" placeholder="Tìm kiếm "
                                aria-label="Search">
                        </form>
                    </div>
                </nav>
                <!-- Trends for you -->
                <nav class="navbar navbar-light header-home bg-light">
                    <div class="container">
                            <strong>Xu hướng của bạn</strong>
                        <a class="nav-item text-dark fs-4" href="">
                            <i class="bi bi-gear"></i>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>