<?php
     include("template/sidebar.php");
?>
<div class="col-md-6">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">

          <button class=" BackNotifiLiked">

            <i class="bi bi-arrow-left fs-5"></i>

          </button>

          <div class="row listUser ">
            <strong>Tweet</strong><br>
            
          </div>
          <div class="navbar-nav ms-auto mb-2 mb-lg-0">
      
      
           
            </button>


          </div>
          <div>

           

          </div>
          






        </div>

    </div>
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
                            </div>
                        </div>
                    </div>
                </section>
            </main>
    </nav>
    
  </div>

</div>




<?php
     include("template/footer.php");
?>