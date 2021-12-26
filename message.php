<?php
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
                <a class="nav-link text-dark" href="chat_message.php">
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