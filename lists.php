<?php
    // trước khi cho người dùng xâm nhập vào bên trong
    // phải kiểm tra Thẻ làm việc
    session_start();
    if(!isset($_SESSION['isSigninOK'])){
      header("location:signin.php");
    }
     include("template/sidebar.php");
?>
      <div class="col-md-6">
        <div class="container">
          <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
      
                <button class=" backlist">
      
                  <i class="bi bi-arrow-left fs-5"></i>
      
                </button>
      
                <div class="row listUser ">
                  <strong>Tên người dùng</strong><br>
                  <span>@Tên đăng nhập</span>
                </div>
      
      
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
      
      
                  <button class="new-list">
                    <i class="bi bi-journal-plus fs-5"></i>
                  </button>
      
      
                </div>
                <div>
      
                  <button class="more-list">
                    <i class="bi bi-three-dots fs-5"></i>
                  </button>
      
                </div>
      
              </div>
            </nav>
          </div>
      
      
          <div class="m-list2-">
            <nav class="navbar navbar-light ">
              <div class="container-fluid">
                <strong>Danh sách được ghim</strong>
                <form class="d-flex">
      
                  <button class="edit-list"><strong>Biên tập</strong></button>
                </form>
              </div>
            </nav>
      
          </div>
          <div class="m-list3">
            <div class="row">
              <div class="col-md-2">
      
                <button>
                  <figure class="figure">
                    <img src="img/image-list.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">A </figcaption>
                  </figure>
                </button>
      
              </div>
              <div class="col-md-2">
                <button>
                  <figure class="figure">
                    <img src="img/image-list.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">A </figcaption>
                  </figure>
                </button>
              </div>
              <div class="col-md-2">
                <button>
                  <figure class="figure">
                    <img src="img/image-list.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">A </figcaption>
                  </figure>
                </button>
              </div>
              <div class="col-md-2">
                <button>
                  <figure class="figure">
                    <img src="img/image-list.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">A </figcaption>
                  </figure>
                </button>
              </div>
              <div class="col-md-2">
                <button>
                  <figure class="figure">
                    <img src="img/image-list.jpg" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-end">A </figcaption>
                  </figure>
                </button>
              </div>
      
            </div>
          </div>
      
        </div>
      
      
        <hr>
      
      
        <div class="Discover-new-Lists">
          <nav class="navbar navbar-light ">
            <div class="container-fluid">
              <strong>Danh sách của bạn</strong>
            </div>
          </nav>
          <div class="Discover-new-Lists1">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                  <div class="row Discover-new-Lists-follow ">
                    <strong>Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span>
                  </div>
                  <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form class="d-flex">
                      <button class="follow-list"><strong>Theo dõi</strong></button>
                    </form>
      
                  </div>
      
                </div>
              </nav>
      
            </div>
          </div>
      
      
          <div class="Discover-new-Lists2">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                  <div class="row Discover-new-Lists-follow ">
                    <strong>Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span>
                  </div>
                  <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form class="d-flex">
                      <button class="follow-list"><strong>Theo dõi</strong></button>
                    </form>
      
                  </div>
      
                </div>
              </nav>
      
            </div>
          </div>
          <div class="Discover-new-Lists3">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                  <div class="row Discover-new-Lists-follow ">
                    <strong>Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span>
                  </div>
                  <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form class="d-flex">
                      <button class="follow-list"><strong>Theo dõi</strong></button>
                    </form>
      
                  </div>
      
                </div>
              </nav>
      
            </div>
          </div>
      
          <div class="show-more">
            <a href="">Cho xem nhiều hơn</a>
          </div>
          <hr>
      
        </div>
        <div class="Your-Lists">
          <nav class="navbar navbar-light ">
            <div class="container-fluid">
              <strong>Khám phá danh sách mới</strong>
            </div>
          </nav>
          <div class="Your-Lists1">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                  <div class="row Discover-new-Lists-follow ">
                    <strong>Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span>
                  </div>
                  <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <button class=" YourLists">
      
                      <i class="bi bi-pin"></i>
          
                    </button>
      
                  </div>
      
                </div>
              </nav>
      
            </div>
          </div>
      
      
          <div class="Your-Lists2">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                  <div class="row Discover-new-Lists-follow ">
                    <strong>Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span>
                  </div>
                  <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <button class=" YourLists">
      
                      <i class="bi bi-pin"></i>
          
                    </button>
      
                  </div>
      
                </div>
              </nav>
      
            </div>
          </div>
          <div class="Your-Lists3">
            <div class="row">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                  <img src="./img/no-image.png" alt="" class="rounded-circle " width="40" height="40">
                  <div class="row Discover-new-Lists-follow ">
                    <strong>Tên người dùng</strong><br>
                    <span>@Tên đăng nhập</span>
                  </div>
                  <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <button class=" YourLists">
      
                      <i class="bi bi-pin"></i>
          
                    </button>
      
                  </div>
      
                </div>
              </nav>
      
            </div>
          </div>
      
          
      
        </div>
      
      
      </div>
      
      
      <?php
     include("template/footer.php");
?>