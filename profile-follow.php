
<?php
     include("template/sidebar.php");
     $page_tittle="Twitter/Theo dõi";

?>
            <?php
            $conn = mysqli_connect('localhost','root','','twitter');
            if(!$conn){
                die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
            }

            //truy vấn cơ sở dữ liệu
            $result =mysqli_query($conn,"SELECT * FROM db_nguoidung   WHERE  ma_nguoidung =".$_GET['id'] );
            $product = mysqli_fetch_assoc($result);

            ?>
            <!-- main-profile-follow -->
            <main class="col-md-6  main-profile-follow border-start border-end">
                <div class="profile-follow-header">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <div class="col-md-1">
                            <a href="home.php" class="navbar-brand"><i class="bi bi-arrow-left"></i></a>
                        </div>
                        <div class="col-md-10">
                            <a class="navbar-brand" href="#">
                                <strong><?php echo $product['tennguoidung'];?></strong><br>
                            </a>
                        </div>
                        </div>
                    </nav>
                </div>
                <div class="profile-follow-main mt-5">
                    <div class="Cover-image">
                        <?php
                    $imageURL1 = 'uploads/'.$product["pofileCover"];
                                echo '<img src="'.$imageURL1.'" id="background" class="img-fluid" width="400" height="200">';
                                ?>
                    </div>
                    <div class="Avatar row">
                            <div class="col-md-7 Avatar_img">
                            <?php  $imageURL = 'uploads/'.$product["pofileImage"];
                              echo '<img src="'.$imageURL.'" alt="" class="rounded-circle " width="200" height="200">';?>
                            </div>
                            <div class=" col-md-5  profile_btnfollow mt-5">
                                <i class="bi bi-three-dots fs-4 me-3"></i>
                                <i class="bi bi-bell fs-4"></i>
                                <input class="bg-dark text-light ms-5" type="submit" id="submit-follow" value="Follow"
                                role="button" disabled="true">          
                            </div>
    
                        <div class="profile-user-follow mt-5">
                            <strong class="fs-4"><?php echo $product['tennguoidung'];?></strong><br>
                            <span>@<?php echo $product['tendangnhap'];?></span><br>
                            <span>Tiểu sử:<?php echo $product['story'];?></span><br>
                            <span>Ngày sinh:<?php echo $product['Dateofbirth'];?></span><br>
                            <span> <i class="bi bi-calendar me-3"></i>Ngày tham gia:<?php echo $product['email_verified_at'];?></span><br>
                            <a href="" class="text-dark me-5">Đang theo dõi:<?php echo $product['following'];?></span></a>
                            <a href="" class="text-dark">Người theo dõi:<?php echo $product['followers'];?></span></a>
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
                                                  <!-- Hiển thị tweet-answer -->
                                                  <div class="tabtweet" id="tweet-answer">
                                <div class="card card-body">
                                    <section class="post-tweet">
                                        <div class="card mb-3 post border-0" style="max-width: 700px;">
                                            <div class="row g-0">
                                                <a class="col-md-2" href="profile-follow.php">
                                                <?php  $imageURL = 'uploads/'.$product["pofileImage"];
                                                    echo '<img src="'.$imageURL.'" alt="" class="rounded-circle " width="35" height="35">';?>
                                                </a>
                                                <div class="col-md-9 ">
                                                    <div class="post_header container-fluid row">
                                                        <div class="col-md-10 post_header_left">
                                                            <a class="Name " href="profile.php"><strong><?php echo $product['tennguoidung'];?></strong></a>
                                                            <span>@<?php echo $product['tendangnhap'];?></span>
                                                            <span class ="date">postedOn</span>
                                                        </div>
                                                        <div class="col-md-2 post_header_right">
                                                            <div class="dropdown">
                                                                <a  type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bi bi-three-dots "></i>
                                                                </a>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#deleteTwweetModal">Xóa bài viết </a></li>
                                                                    <li><a class="dropdown-item" href="#">Ghim vào hồ sơ của bạn</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <!-- modal xóa tweet -->
                                                        <div  class="modal fade mt-5" id="deleteTwweetModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Xóa tweet</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Điều này không thể hoàn tác và nó sẽ bị xóa khỏi hồ sơ của bạn, dòng thời gian của bất kỳ tài khoản nào theo dõi bạn và kết quả tìm kiếm Twitter.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary pe-5 ps-5" data-bs-dismiss="modal">Hủy</button>
                                                                    <button type="button" class="btn btn-primary pe-5 ps-5">Xóa</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post_body ms-4">
                                                        <div>content_status</div>
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
                                </div>
                            </div>
                </div>
                <div class="profile-follow-footer">


                </div>
            </main>
<?php
     include("template/footer.php");
?>