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
      <div class="col-md-6 mainexplore border-start border-end ">
        <nav class="navbar navbar-light ">
          <form class="container-fluid">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Username"
                aria-describedby="basic-addon1">
            </div>
            <div class="icon"><i class="bi bi-gear"></i></div>
          </form>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/images1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Chủ đề nổi bật</h5>

              </div>
            </div>
            <div class="carousel-item">
              <img src="img/images2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Chủ đề nổi bật</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/images3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Chủ đề nổi bật</h5>

              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="trend_container">
          <div class="trend_text">
            <p class="fw-bold">Xu hướng</p>
          </div>
          <div class="trend_text-1">
            <p class="fw-lighter">Xu hướng Việt Nam</p>
            <p class="fw-bold">#Content</p>
            <p class="fw-lighter">Tweets</p>
          </div>
        </div>
      </div>
      <!--Search-->
      <div class="col-md-3">
        <div class="follow-suggestion mt-4">
          <nav class="navbar navbar-light header-home bg-light">
            <div class="container">
              <strong>Gợi ý theo dõi</strong>
            </div>
          </nav>
          <ul class="nav nav-pills nav-fill follow bg-light">
            <li class="nav-item ">
              <a class="nav-link text-dark" href="#">
                <div class="container-fluid row">
                  <div class="col-md-4">
                    <img src="./img/no-image.png" alt="" class="rounded-circle" width="40" height="40">
                  </div>
                  <div class="col-md-6">
                    <span>tên người dùng</span><br>
                    <strong>@tên đăng nhập</strong>
                  </div>
                  <div class="col-md-2">
                    <input class="bg-dark text-light" type="submit" id="submit-follow" value="Theo dõi" role="button"
                      disabled="true">
                  </div>
                </div>
              </a>
            </li>
          </ul>
          <div class="show-more">
            <a href="">Xem nhiều hơn</a>
          </div>
        </div>
        <footer class="containner footer-right">
          <div class="footer-right">
            <a class="nav-link text-muted " href="#">Giới Thiệu</a>
            <a class="nav-link text-muted" href="#">Trung Tâm trợ giúp</a>
            <a class="nav-link text-muted" href="#">Điều khoản dịch vụ </a>
            <a class="nav-link text-muted" href="#">Chính sách riêng tư </a>
            <a class="nav-link text-muted" href="#">Chính sách cookie</a>
            <a class="nav-link text-muted" href="#">Thông tin quảng cáo</a>
            <a class="nav-link text-muted" href="#">Blog</a>
            <a class="nav-link text-muted" href="#">Trạng Thái</a>
            <a class="nav-link text-muted" href="#">Nghề nghiệp</a>
            <a class="nav-link text-muted" href="#">Tài nguyên thương hiệu</a>
            <a class="nav-link text-muted" href="#">Quảng cáo</a>
            <a class="nav-link text-muted" href="#">Tiếp thị</a>
            <a class="nav-link text-muted" href="#">Link</a>
            <a class="nav-link text-muted" href="#">Twitter cho doanh nghiệp</a>
            <a class="nav-link text-muted" href="#">Nhà phát triển </a>
            <a class="nav-link text-muted" href="#">Danh mục</a>
            <a class="nav-link text-muted" href="#">Cài đặt</a>
          </div>
          <div class="f-right me-5">
            &copy;2021Twitter
          </div>
        </footer>
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