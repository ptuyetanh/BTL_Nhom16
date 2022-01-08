<?php
    // trước khi cho người dùng xâm nhập vào bên trong
    // phải kiểm tra Thẻ làm việc
    // session_start();
    // if(!isset($_SESSION['isSigninOK'])){
    //     header("location:signin.php");
    // }
    $page_tittle="Twitter/Trang chủ";
     include("template/sidebar.php");
?>
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
                            <a class="col-md-2" href="profile-follow.php">
                                <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="40" height="40">
                            </a>
                            <div class="col-md-10 ">
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
                                <div class="reply-wrapper">
                                    <div class="reply-modal-content">
                                        <div class="reply-modal-header">
                                            <span class="close" aria-label="Close" data-focusable = "true" role = "button" tabindex = "0">  </span>
                                            
                                        </div>
                                        <div class="reply-modal-body">
                                            <div class="reply-container">
                                                <div class="reply-wrapper-image">
                                                <a class="col-md-2" href="profile-follow.php">
                                                        <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                                                        </a>
                                                </div>
                                                <div class="reply-content-wrapper">
                                                    <div class="reply-content-desc">
                                                        <div class="reply-user-fullName">
                                                            Daniel Brown
                                                        </div>
                                                        <div class="reply-username">
                                                            @brown
                                                        </div>
                                                        <div class="reply-date">
                                                        <span  class="reply-date-time">.</span>1h
                                                        </div>
                                                        
                                                        <div class="reply-desc-text">
                                                            hello
                                                        </div>
                                                        <div class="reply-to-desc">
                                                            <span class="reply-to">
                                                                Reply to
                                                            </span>
                                                            <a href="#" class="reply-username-link-link">@brown</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-pip">
                                                <div class="reply-user-msg">
                                                    <div class="reply-wrapper-img">
                                                    <a class="col-md-2" href="profile-follow.php">
                                                        <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                                                        </a>
                                                    </div>  
                                                    </div>
                                                </div>
                                                <textarea  id="replyInput" placeholder = "Tweet câu trả lời của bạn"></textarea>
                                            </div>
                                            <div class="reply-modal-footer">
                                            <button class= "reply-btn" id = "replyBtn" role= "button" data-focusable = "true" tabindex ="0" disabled = "true" > 
                                                Reply
                                            </button>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
<?php
   include("template/footer.php")
?>