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
                        <i class="bi bi-twitter text-primary p-2"></i>
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
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="./img/no-image.png" alt="" class="rounded-circle me-3 mt-2"
                                                width="32" height="32">
                                        </div>
                                        <div class="col-md-8">
                                            <span>Tên người dùng</span><br>
                                            <strong>@Tên đăng nhập</strong>
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
                                                    <span>Tên người dùng</span><br>
                                                    <strong>Tên đăng nhập </strong>
                                                </div>
                                            </div>
                                        </a>
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
                    <div class="container-fluid home_main">
                        <a class="navbar-brand ms-4 mt-2" href="#">
                            <strong>Trang chủ</strong>
                        </a>
                    </div>
                </nav>
                <!-- tweet-status  -->
                <div class="tweet-status mt-5">
                    <!-- status  -->
                    <div class="card mb-3 status border-0" style="max-width: 700px;">
                        <div class="row g-0 ">
                            <div class="col-md-2">
                                <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="40" height="40">
                            </div>
                            <div class="col-md-10 ">
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
                    <div class="card mb-3 post border-0" style="max-width: 700px;">
                        <div class="row g-0">
                            <div class="col-md-2">
                                <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="40" height="40">
                            </div>
                            <div class="col-md-10 ">
                                <div class="post_header container-fluid row">
                                    <div class="col-md-10 post_header_left">
                                        <a class="Name " href=""><strong>Tên người dùng</strong></a>
                                        <span>@tênđăngnhap</span>
                                        <span>ngày</span>
                                    </div>
                                    <div class="col-md-2 post_header_right">
                                        <i class="bi bi-three-dots "></i>
                                    </div>
                                </div>
                                <div class="post_body ms-4">
                                    <div> post text..... </div>
                                </div>
                                <div class="post_footer">
                                    <ul class="nav nav-pills nav-fill mt-3 me-5">
                                        <li class="nav-item">
                                          <a class="fs-5" href=""><i class="bi bi-chat"></i></a>
                                        </li>
                                        <li class="nav-item ">
                                          <a class="fs-5" href="#"><i class="bi bi-arrow-left-right"></i></a>
                                        </li>
                                        <li class="nav-item">
                                          <a class=" fs-5" href="#"><i class="bi bi-heart"></i></a>
                                        </li>
                                        <li class="nav-item">
                                          <a class=" fs-5"><i class="bi bi-share"></i></a>
                                        </li>
                                      </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <div class="col-md-3 search w-5 h-5">
                <nav class="navbar navbar-light nav-pills nav-fill search_tweet">
                    <div class="container">
                        <!-- search  -->
                        <form class="d-flex">
                            <input class="form-control bg-light fs-2" type="search" placeholder="Tìm kiếm "
                            aria-label="Search">
                        </form>
                    </div>
                </nav>
                <!-- Trends for you -->
                <div class="trends-you">
                    <nav class="navbar navbar-light header-home bg-light">
                        <div class="container">
                            <strong>Xu hướng của bạn</strong>
                            <a class="nav-item text-dark fs-4" href="">
                                <i class="bi bi-gear"></i>
                            </a>
                        </div>
                    </nav>
                    <ul class="nav nav-pills nav-fill t-trends bg-light ">
                        <li class="nav-item ">
                            <a class="nav-link text-dark" href="#">
                                <div class="container-fluid row">
                                    <div class="col-md-10">
                                        <span>Chủ đề</span><br>
                                        <strong>#tag Trends</strong>
                                        <br>
                                        ...tweet
                                    </div>
                                    <div class="col-md-2 ">
                                        <i class="bi bi-three-dots ms-4"></i>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="follow-suggestion mt-4">
                    <nav class="navbar navbar-light header-home bg-light">
                        <div class="container">
                            <strong>Gợi ý theo dõi</strong>
                        </div>
                    </nav>
                    <ul class="nav nav-pills nav-fill follow bg-light">
                        <li class="nav-item ">
                            <a class="nav-link text-dark" href="#">
                                <div class="container-fluid row">
                                    <div class="col-md-4">
                                        <img src="./img/no-image.png" alt="" class="rounded-circle" width="40"
                                            height="40">
                                    </div>
                                    <div class="col-md-6">
                                        <strong>tên người dùng</strong><br>
                                        <span>@tên đăng nhập</span>
                                    </div>
                                    <div class="col-md-2">
                                        <input class="bg-dark text-light" type="submit" id="submit-follow" value="Follow"
                                            role="button" disabled="true">
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <footer class="containner footer-right">
                    <div class="footer-right">
                        <a class="nav-link text-muted " href="#">Giới Thiệu</a>
                        <a class="nav-link text-muted" href="#">Trung Tâm trợ giúp</a>
                        <a class="nav-link text-muted" href="#">Điều khoản dịch vụ </a>
                        <a class="nav-link text-muted" href="#">Chính sách riêng tư </a>
                        <a class="nav-link text-muted" href="#">Chính sách cookie</a>
                        <a class="nav-link text-muted" href="#">Thông tin quảng cáo</a>
                        <a class="nav-link text-muted" href="#">Blog</a>
                        <a class="nav-link text-muted" href="#">Trạng Thái</a>
                        <a class="nav-link text-muted" href="#">Nghề nghiệp</a>
                        <a class="nav-link text-muted" href="#">Tài nguyên thương hiệu</a>
                        <a class="nav-link text-muted" href="#">Quảng cáo</a>
                        <a class="nav-link text-muted" href="#">Tiếp thị</a>
                        <a class="nav-link text-muted" href="#">Link</a>
                        <a class="nav-link text-muted" href="#">Twitter cho doanh nghiệp</a>
                        <a class="nav-link text-muted" href="#">Nhà phát triển </a>
                        <a class="nav-link text-muted" href="#">Danh mục</a>
                        <a class="nav-link text-muted" href="#">Cài đặt</a>
                    </div>
                    <div class="f-right me-5">
                        &copy;2021Twitter
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>