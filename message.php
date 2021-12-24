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
            <!-- main message -->
            <div class="col-md-4 message-left border-start border-end">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Tin nhắn</a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item text-dark ">
                                <a class="nav-link" href="#"><i class="bi bi-gear"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" data-bs-toggle="modal" data-bs-target="#model-message" ><i class="bi bi-envelope-plus"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <form class="d-flex">
                            <input class="form-control fs-2" type="" placeholder="Tìm kiếm người và nhóm"
                                aria-label="Search">
                        </form>
                    </div>
                </nav>
                <hr>
                <a class="nav-link text-dark" href="#">
                    <div class="container-fluid row" style="font-size: 14px;">
                        <div class="col-md-2">
                            <img src="./img/no-image.png" alt="" class="rounded-circle" width="40" height="40">
                        </div>
                        <div class="col-md-9">
                            <strong>tên người dùng</strong>
                            <span>@tên đăng nhập</span><br>
                            <span>tin nhắn</span>
                        </div>
                        <div class="col-md-1">
                             <span>Ngày</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-5 message-right border-end">
                <div class="no-message mt-5">
                    <h2>Bạn không có tin nhắn được chọn</h2>
                    <p>Chọn một tin nhắn từ những tin nhắn hiện có của bạn, hoặc bắt đầu một tin nhắn mới.</p>
                    <a class="btn btn-primary text-light fs-4 " href="#" role="button" data-bs-toggle="modal"
                        data-bs-target="#model-message" data-focusable="true">
                        Tin nhắn mới
                    </a>
                    <!-- Modal -->
                    <div class="modal fade" id="model-message" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-2" id="exampleModalToggleLabel"><button type="button"
                                            class="btn-close fs-4" data-bs-dismiss="modal"
                                            aria-label="Close"></button>Tin nhắn mới</h5>
                                    <a class="btn btn-primary text-light fs-3" href="#" role="button"
                                        data-bs-toggle="modal" data-bs-target="#model-message" data-focusable="true">
                                        Kế tiếp
                                    </a>
                                </div>
                                <div class="modal-body row">
                                    <input class="form-control fs-2" type="" placeholder="Tìm kiếm người và nhóm"
                                        aria-label="Search">
                                    <hr>
                                    <a class="nav-link text-dark" href="#">
                                        <div class="container-fluid row">
                                            <div class="col-md-1">
                                                <img src="./img/no-image.png" alt="" class="rounded-circle" width="40"
                                                    height="40">
                                            </div>
                                            <div class="col-md-11">
                                                <strong>tên người dùng</strong><br>
                                                <span>@tên đăng nhập</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>