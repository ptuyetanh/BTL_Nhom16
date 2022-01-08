<?php
    // trước khi cho người dùng xâm nhập vào bên trong
    // phải kiểm tra Thẻ làm việc
    session_start();
    if(!isset($_SESSION['isSigninOK'])){
        header("location:signin.php");
    }
?>
<?php
     include("template/sidebar.php");
?>
            <!--main profile-inside-->
            <div class="col-md-6 mainprofile-inside border-start border-end ">
                <div class="inside">
                    <div class="arrow-left">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="search-inside">
                        <form class="d-flex">
                            <input class=" profile form-control bg-light fs-5" type="search" placeholder="Tìm kiếm... "
                            aria-label="Search">
                        </form>
                    </div>
                    <div class="dot">
                        <i class="bi bi-three-dots"></i>
                    </div>
                </div>
                <!--under profile-->
                <div class="under-profile">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                          <a class="nav-link text-dark" aria-current="page" href="#">Hàng đầu</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark two" href="#">Mới nhất</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-dark three">Mọi người</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark four">Ảnh</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-dark five">Video</a>
                          </li>
                      </ul>
                </div>
            </div>
        </div>
    </div
    




<?php
     include("template/footer.php");
?>