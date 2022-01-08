<?php
    $page_tittle="Twitter/Tin nhắn";
     include("template/sidebar.php")
?>
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
            <!--Thiết kế khung chat để gán vào file message.php -->
            <div class="col-md-5  message-right border-end " style="padding: 0;">
                <div class="chat-header">
                    <nav class="navbar navbar-expand-lg navbar-light  message-right-header">
                        <div class="container-fluid">
                            <a class="nav-link text-dark" href="#">
                                <div class="container-fluid row">
                                    <a class="col-md-2" href="profile-follow.php">
                                        <img src="./img/no-image.png" alt="" class="rounded-circle mt-1" width="37"
                                            height="38">
                                    </a>
                                    <div class="col-md-10">
                                        <strong>tên người dùng</strong><br>
                                        <span>@tên đăng nhập</span>
                                    </div>
                                </div>
                            </a>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item text-dark ">
                                    <a class="nav-link" href="#"><i class="bi bi-info-circle fs-4"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <hr>
                <div class="chat-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 chat-main-left mt-5">
                                <img src="./img/no-image.png" alt="" class="rounded-circle " width="35"
                                height="35"> 
                                <a href="" class="link-dark text-decoration-none ms-1">tin nhan den</a><br>
                                <span class="ms-5">ngay</span>
                            </div>
                            <div class="col-md-3 chat-main-right">
                                <a href="" class="link-dark text-decoration-none text-light bg-primary">tin nhan den</a>
                                <span class="ms-5">ngay</span>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="chat-footer" aria-label="Bắt đầu một ti nhắn mới" role="complementary">
                    <span class="material-icons text-primary me-2 fs-3 mt-2">
                        image</span>
                    <span class="material-icons fs-4,5 text-primary me-2 fs-3 mt-2">
                        gif_box
                    </span>
                    <textarea name="input-message" placeholder="Bắt đầu một tin nhắn mới"
                        aria-label="Bắt đầu mọt tin nhắn mới" id="status-emoji" cols="56" rows="1"></textarea>
                    <a class="message-send" role="button" id="send-message"><i class="bi bi-send fs-4"></i></a>
                </aside>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>