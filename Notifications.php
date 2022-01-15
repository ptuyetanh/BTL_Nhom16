<?php
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
        
        <div >
          <div class="container notifi">


          

            <?php 
                $conn=mysqli_connect('localhost','root','','twitter');
                if(!$conn){
                    die("kết nối thất bại");
                }
                $sql ="SELECT * FROM comment , tweet WHERE comment.tweetID = tweet.tweetID  ORDER BY commentID DESC ";

                $result = mysqli_query($conn,$sql);
                    while($row =mysqli_fetch_assoc($result)){
              
                ?>
    
   

         <section class="thongbaobl">
         <div class="tbbl  post " style="">
            <div class="row g-0">
            <a class="col-md-2" href="profile-follow.php">
                    <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                </a>
                <div class="col-md-10 ">
                    <div class="post_header container-fluid row">
                        <div class="col-md-10 post_header_left">
                            <a class="Name " href="profile.php"><strong>
                                </strong></a>
                            <span>@
                            </span>
                            <span class="date">
                                <?php echo $row['commentAt'];?>
                            </span>
                        </div>
                        <div class="col-md-2 post_header_right">
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots "></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#deleteTwweetModal">Xóa bài viết </a></li>
                                    <li><a class="dropdown-item" href="#">Ghim vào hồ sơ của bạn</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="post_body ms-4">
                        <div>
                            <?php echo $row['comment'];?>
                        </div>
                    </div>
                    <div class="post_footer">
                        <ul class="nav nav-pills nav-fill mt-3 me-5">
                            <li class="nav-item">
                                <a class="fs-5" href="" data-bs-toggle="modal" data-bs-target="#modelCOMMENT"><i
                                        class="bi bi-chat"></i></a>
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
                    


                    <div class="comment-container">

                    </div>

                </div>
            </div>
           </div>
            </section>
            <?php
                }
                ?>

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