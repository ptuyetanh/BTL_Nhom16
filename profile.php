<?php
    $page_tittle="Twitter/Hồ sơ";
     include("template/sidebar.php");
?>
            <!--main-->
            <div class="col-md-6 mainprofile border-start border-end ">
                <div class="main-header_text">
                    <div class="arrow">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="around">
                        <strong>Tên người dùng</strong><br>
                        <span>@Tên đăng nhập</span>
                    </div>

                </div>
                <!--cover area-->
                <div class="area_main ">
                    <img id="background" class="img-fluid" src="img/images5.jpg" alt="">
                </div>
                <div class=" profile">
                    <div class="profile_both">
                        <div class="col-md-7 profile_img">
                            <img src="img/no-image1.jpg" alt="">
                        </div>
                        <div class=" col-md-5 profile_btn">
                            <a class="btn btn-light" href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#model-message" data-focusable="true">
                                <strong>Chỉnh sửa hồ sơ</strong>
                            </a>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="modal fade" id="model-message" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-2" id="exampleModalToggleLabel"><button type="button"
                                            class="btn-close fs-4" data-bs-dismiss="modal"
                                            aria-label="Close"></button>Chỉnh sửa hồ sơ</h5>
                                    <a class="btn btn-dark  text-light me-3 pe-4 ps-4" href="#" role="button"
                                        data-bs-toggle="modal" data-bs-target="#model-message" data-focusable="true">
                                        <span class="text-light fs-5">Lưu</span>
                                    </a>
                                </div>
                                <div class="modal-body-profile">
                                    <div class="modal_coverimage">
                                        <img id="background" class="img-fluid" src="img/images5.jpg" alt="">
                                        <div class="file_camera">
                                            <label for="filephoto">
                                                <i class="bi bi-camera fs-1 pe-3 ps-3 text-light"></i>
                                            </label>
                                            <input type="file" name="file" id="filephoto">
                                        </div>
                                    </div>
                                    <div class="modal_Avatar">
                                        <img src="img/no-image1.jpg" class="rounded-circle" alt="">
                                        <div class="file_camera">
                                            <label for="filephoto">
                                                <i class="bi bi-camera fs-2 pe-2 ps-2 text-light"></i>
                                            </label>
                                            <input type="file" name="file" id="filephoto">
                                        </div>
                                    </div>
                                    <form class="profile-input">
                                        <div class="form-floating mb-4">
                                            <input type="text" id="inputEmail" name="" class="form-control"
                                                id="floatingInput">
                                            <label for="floatingInput">Tên</label>
                                        </div>
                                        <div class="form-floating mb-1">
                                            <input type="text" id="inputEmail" name="" class="form-control"
                                                id="floatingInput">
                                            <label for="floatingInput">Tiểu sử</label>
                                        </div>
                                        <div class="form-floating mb-5 row">
                                            <label for="birthday" class="mb-5 text-secondary">Ngày sinh</label><br>
                                            <input type="date" id="birthday" name="birthday" class="col-md-6 mt-5 ms-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-user mt-3">
                    <strong class="fs-4">Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span><br>
                    <span>Tiểu sử</span><br>
                    <span>Ngày sinh</span><br>
                    <span> <i class="bi bi-calendar-date me-2"></i></i>Ngày tham gia</span><br>
                    <a href="" class="text-dark me-5">Đang theo dõi</a>
                    <a href="" class="text-dark">Người theo dõi</a>
                </div>
                <nav class="nav nav-pills nav-fill profile-menu" role="tablist">
                    <a class="nav-link tweet" href="#tweet" aria-controls="tweet" role="tab" data-toggle="tab">Tweet</a>
                    <a class="nav-link" href="#tweet-answer" aria-controls="tweet-answer" role="tab"
                        data-toggle="tab">Tweet
                        và câu trả lời</a>
                    <a class="nav-link" href="#vehicle" aria-controls="vehicle" role="tab" data-toggle="tab">Phương
                        tiện</a>
                    <a class="nav-link" href="#likes" aria-controls="likes" role="tab" data-toggle="tab">Lượt
                        thích</a>
                </nav>
            </div>
<?php
     include("template/footer.php");
?>