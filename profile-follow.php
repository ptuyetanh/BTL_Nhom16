<?php
     include("template/sidebar.php");
?>
            <!-- main-profile-follow -->
            <main class="col-md-6  main-profile-follow border-start border-end">
                <div class="profile-follow-header">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <div class="col-md-1">
                            <a href="index.php" class="navbar-brand"><i class="bi bi-arrow-left"></i></a>
                        </div>
                        <div class="col-md-10">
                            <a class="navbar-brand" href="#">
                                <strong>Tên Người follow</strong><br>
                                <span class="ms-5">số tweet</span>
                            </a>
                        </div>
                        </div>
                    </nav>
                </div>
                <div class="profile-follow-main mt-5">
                    <div class="Cover-image">
                        <img id="background" class="img-fluid mt-3" src="img/images5.jpg" alt="">
                    </div>
                    <div class="Avatar row">
                            <div class="col-md-7 Avatar_img">
                                <img src="img/no-image1.jpg" alt="" class="rounded-circle">
                            </div>
                            <div class=" col-md-5 profile_btnfollow mt-5">
                                <i class="bi bi-three-dots fs-4 me-3"></i>
                                <i class="bi bi-bell fs-4"></i>
                                <input class="bg-dark text-light ms-3 fs-4" type="submit" id="submit-follow" value="Theo dõi"
                                            role="button" disabled="true">
                            </div>
    
                        <div class="profile-user-follow mt-3">
                            <strong class="fs-4">Tên người dùng</strong><br>
                            <span>@Tên đăng nhập</span><br>
                            <span>Tiểu sử</span><br>
                            <span>Ngày sinh</span><br>
                            <span> <i class="bi bi-calendar me-3"></i>Ngày tham gia</span><br>
                            <a href="" class="text-dark me-5">Đang theo dõi</a>
                            <a href="" class="text-dark">Người theo dõi</a>
                        </div>
                        <nav class="nav nav-pills nav-fill" role="tablist">
                            <a class="nav-link tweet" href="#tweet" aria-controls="tweet" role="tab"
                              data-toggle="tab">Tweet</a>
                            <a class="nav-link" href="#tweet-answer" aria-controls="tweet-answer"
                              role="tab" data-toggle="tab">Tweet và câu trả lời</a>
                            <a class="nav-link" href="#vehicle" aria-controls="vehicle" role="tab" data-toggle="tab">Phương
                              tiện</a>
                            <a class="nav-link" href="#likes" aria-controls="likes" role="tab" data-toggle="tab">Lượt
                              thích</a>
                          </nav>
                          <hr>
                </div>
                <div class="profile-follow-footer">
                    
                </div>
            </main>
<?php
     include("template/footer.php");
?>