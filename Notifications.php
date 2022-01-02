<?php
    // trước khi cho người dùng xâm nhập vào bên trong
    // phải kiểm tra Thẻ làm việc
    session_start();
    if(!isset($_SESSION['isSigninOK'])){
      header("location:signin.php");
    }
    $page_tittle="Twitter/Thông báo";
     include("template/sidebar.php");
?>
      <div class="col-md-6 mainnotifi border-start border-end">
        <div>
          <nav class="navbar navbar-light bg-light">
            <div class="container-fluid ">
              <a class="navbar-brand"><b>Thông báo</b></a>
              <a href=""><i class="bi bi-gear text-dark"></i></a>
            </div>
          </nav>
        </div>
        <div>
          <!-- Tabs navs -->
          <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
            <li class="nav-item navnotifi" role="presentation">
              <a class="nav-link active text-dark" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
                aria-controls="ex2-tabs-1" aria-selected="true"><b>Tất cả</b></a>
            </li>
            <li class="nav-item navnotifi" role="presentation">
              <a class="nav-link text-dark" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
                aria-controls="ex2-tabs-2" aria-selected="false"><b>Đề cập</b></a>
            </li>
          </ul>
          <!-- Tabs navs -->
        </div>
        <div >
          <div class="container notifi">
          <div class="row">
              <link rel="stylesheet" href="">
              <div class="col-md-1">
                <i class="bi2 bi-star-fill fs-3 "></i>
              </div>
              <div class="col-md-10">
              <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                </i>
                <br> <p>tên đăng nhập</p>
                
              </div>
              <div class="col-md-1">
                <i class="bi bi-three-dots "></i>

              </div>
            </div>
            <div class="row">
              <link rel="stylesheet" href="">
              <div class="col-md-1">
                <i class="bitim bi-heart-fill"></i>
              </div>
              <div class="col-md-10">
              <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                </i>
                <br> <p>tên đăng nhập</p>
                
              </div>
             
            </div>

            <div class="row">
              
              <link rel="stylesheet" href="">
              <div class="col-md-1">
              <i class="bi bi-person-fill fs-3 user"></i>
              </div>
              <div class="col-md-10">
              <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                <br> <p>tên đăng nhập</p>
                
              </div>
              
            </div>
            <div class="row">
              <link rel="stylesheet" href="">
              <div class="col-md-1">
                <i class="bi2 bi-star-fill fs-3 "></i>
              </div>
              <div class="col-md-10">
              <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                </i>
                <br> <p>tên đăng nhập</p>
                
              </div>
              <div class="col-md-1">
                <i class="bi bi-three-dots "></i>

              </div>
            </div>
            <div class="row">
              <link rel="stylesheet" href="">
              <div class="col-md-1">
                <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
              </i>
              </div>
              <div class="col-md-10 ">
              
                <div class="post_header-notifi container-fluid row">
                  
                      <a class="Namenotifi " href=""><strong>Tên người dùng</strong></a>
                      <span>@tênđăngnhap</span>
                      <span>ngày</span>
                 
                 
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
              <div class="col-md-1">
                <i class="bi bi-three-dots "></i>

              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
     include("template/footer.php");
?>