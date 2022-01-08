<?php
    // trước khi cho người dùng xâm nhập vào bên trong
    // phải kiểm tra Thẻ làm việc
    $page_tittle="Twitter/Trang chủ";
     include("template/sidebar.php");
?>
            <!-- main  -->
            <main class="col-md-6 main border-start border-end">
                <!-- header-home  -->
                <nav class="navbar navbar-light header-home ">
                    <div class="container">
                        <strong class="fs-4 ms-4">Trang chủ</strong>
                    </div>
               </nav>
                <!-- tweet-status  -->
                <div class="tweet-status">
                    <!-- status  -->
                    <div class="card mb-3 status border-0" style="max-width: 700px;">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                            </div>
                            <div class="col-md-10">
                                <form action="" method="">
                                    <textarea name="content_status" placeholder="Bạn đang nghĩ gì?"
                                        aria-label="Bạn đang nghĩ gì" id="content_status" autofocus></textarea>
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
                                                    value="Tweet" role="button">
                                            </div>
                                            <!-- <SCript>
                                                $(document).ready(function(){
                                                    $('#content_status').on('input change',function(){
                                                        if($(this).val() = ""){
                                                            $('#submit-tweet-button').prop('disabled',true);
                                                        }else{
                                                            $('#submit-tweet-button').prop('disabled',false);
                                                        }
                                                    });
                                                });
                                            </SCript> -->
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
                            <a class="col-md-2" href="profile-follow.php">
                                <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                            </a>
                            <div class="col-md-9 ">
                                <div class="post_header container-fluid row">
                                    <div class="col-md-10 post_header_left">
                                        <a class="Name " href="profile-follow.php"><strong>Tên người dùng</strong></a>
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
<?php
   include("template/footer.php")
?>