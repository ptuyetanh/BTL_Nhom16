<?php
    // trước khi cho người dùng xâm nhập vào bên trong
   // phải kiểm tra Thẻ làm việc
    session_start();
    if(!isset($_SESSION['isSigninOK'])){
        header("location:signin.php");
    }
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
                        <div class="profile_img">
                            <img src="img/no-image1.jpg" alt="">
                        </div>
                        <div class="profile_btn">
                            <button>Thiết lập hồ sơ</button>
                        </div>
                    </div>

                    <div class="text-user">
                        <strong>Tên người dùng</strong><br>
                        <span>@Tên đăng nhập</span>
                    </div>
                    <div class="follow">
                        <div class="user_follow">
                            <span>Số người theo dõi</span>
                        </div>
                        <div class="number_follow">
                            <span>Lượt theo dõi</span>
                        </div>
                    

                    </div>
                </div>
                <div class="search_bar">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link text-dark" aria-current="page" href="#">Tweets</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark two" href="#">Tweets & trả lời</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark three">Phương tiện truyền thông</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark four">Thích</a>
                          </li>
                      </ul>
                </div>   
            </div>


<?php
     include("template/footer.php");
?>