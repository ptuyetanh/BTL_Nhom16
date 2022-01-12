<?php
    $page_tittle="Twitter/Hồ sơ";
     include("template/sidebar.php");
?>
<?php
    $conn = mysqli_connect('localhost','root','','twitter');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }

    //truy vấn cơ sở dữ liệu
    $sql = "SELECT * FROM db_nguoidung WHERE ma_nguoidung = $ma_nguoidung";
    $result =mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        while($row =mysqli_fetch_assoc($result)){
?>
            <!--main-->
            <div class="col-md-6 mainprofile border-start border-end ">
                <div class="main-header_text">
                    <div class="arrow">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="around">
                        <strong><?php echo $row['tennguoidung'];?></strong><br>
                        <span>@<?php echo $row['tendangnhap'];?></span>
                    </div>

                </div>
                <!--cover area-->
                <div class="area_main ">
                    <img id="background" class="img-fluid" src="img/images5.jpg" alt="">
                </div>
                <div class=" profile">
                    <div class="profile_both">
                        <div class="col-md-7 profile_img">
                            <img src="img/no-image1.jpg" alt="">
                        </div>
                        <div class=" col-md-5 profile_btn">
                            <a class="btn btn-light" href="#" role="button" data-bs-toggle="modal"
                                data-bs-target="#model-message" data-focusable="true">
                                <strong>Chỉnh sửa hồ sơ</strong>
                            </a>
                        </div>
                    </div>
                    <!-- modal -->
                    <div class="modal fade" id="model-message" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content ">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-2" id="exampleModalToggleLabel"><button type="button"
                                            class="btn-close fs-4" data-bs-dismiss="modal"
                                            aria-label="Close"></button>Chỉnh sửa hồ sơ</h5>
                                    <a class="btn btn-dark  text-light me-3 pe-4 ps-4" href="#" role="button"
                                        data-bs-toggle="modal" data-bs-target="#model-message" data-focusable="true">
                                        <span class="text-light fs-5">Lưu</span>
                                    </a>
                                </div>
                                <div class="modal-body-profile">
                                    <div class="modal_coverimage">
                                        <img id="background" class="img-fluid" src="img/images5.jpg" alt="">
                                        <div class="file_camera">
                                            <label for="filephoto">
                                                <i class="bi bi-camera fs-1 pe-3 ps-3 text-light"></i>
                                            </label>
                                            <input type="file" name="file" id="filephoto">
                                        </div>
                                    </div>
                                    <div class="modal_Avatar">
                                        <img src="img/no-image1.jpg" class="rounded-circle" alt="">
                                        <div class="file_camera">
                                            <label for="filephoto">
                                                <i class="bi bi-camera fs-2 pe-2 ps-2 text-light"></i>
                                            </label>
                                            <input type="file" name="file" id="filephoto">
                                        </div>
                                    </div>
                                    <form class="profile-input">
                                        <div class="form-floating mb-4">
                                            <input type="text" id="inputEmail" name="" class="form-control"
                                                id="floatingInput">
                                            <label for="floatingInput">Tên</label>
                                        </div>
                                        <div class="form-floating mb-1">
                                            <input type="text" id="inputEmail" name="" class="form-control"
                                                id="floatingInput">
                                            <label for="floatingInput">Tiểu sử</label>
                                        </div>
                                        <div class="form-floating mb-5 row">
                                            <label for="birthday" class="mb-5 text-secondary">Ngày sinh</label><br>
                                            <input type="date" id="birthday" name="birthday" class="col-md-6 mt-5 ms-3">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-user mt-3">
                    <strong class="fs-4"><?php echo $row['tennguoidung'];?></strong><br>
                    <span>@<?php echo $row['tendangnhap'];?></span><br>
                    <span>Tiểu sử : <?php echo $row['story'];?></span><br>
                    <span>Ngày sinh : <?php echo $row['Dateofbirth'];?></span><br>
                    <span> <i class="bi bi-calendar-date me-2"></i> Ngày tham gia <?php echo $row['email_verified_at'];?></span><br>
                    <a href="" class="text-dark me-5"><?php echo $row['following'];?> Đang theo dõi</a>
                    <a href="" class="text-dark"><?php echo $row['followers'];?> Người theo dõi</a>
                </div>
<?php
        }
    }
?>

                <nav class="nav nav-pills nav-fill profile-menu" role="tablist">
                    <a class="nav-link tweet" href="#tweet" aria-controls="tweet" role="tab" data-toggle="tab">Tweet</a>
                    <a class="nav-link" href="#tweet-answer" aria-controls="tweet-answer" role="tab"
                        data-toggle="tab">Tweet
                        và câu trả lời</a>
                    <a class="nav-link" href="#vehicle" aria-controls="vehicle" role="tab" data-toggle="tab">Phương
                        tiện</a>
                    <a class="nav-link" href="#likes" aria-controls="likes" role="tab" data-toggle="tab">Lượt
                        thích</a>
                </nav>
                <!-- Hiển thị bài tweet -->
                <div class="tabtweet" id="tweet">
                    <div class="card card-body">
                        <?php
                                $conn = mysqli_connect('localhost','root','','twitter');
                                if(!$conn){
                                    die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                                }

                                //truy vấn cơ sở dữ liệu
                                $sql = "SELECT * FROM db_nguoidung INNER JOIN tweet on db_nguoidung.ma_nguoidung=tweet.ma_nguoidung  WHERE db_nguoidung.ma_nguoidung = $ma_nguoidung  ORDER BY postedOn DESC ";
                                $result =mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result)){
                                    while($row =mysqli_fetch_assoc($result)){
                        ?>
                        <section class="post-tweet">
                            <div class="card mb-3 post border-0" style="max-width: 700px;">
                                <div class="row g-0">
                                    <a class="col-md-2" href="profile-follow.php">
                                        <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                                    </a>
                                    <div class="col-md-9 ">
                                        <div class="post_header container-fluid row">
                                            <div class="col-md-10 post_header_left">
                                                <a class="Name " href="profile.php"><strong><?php echo $row['tennguoidung'];?></strong></a>
                                                <span>@<?php echo $row['tendangnhap'];?></span>
                                                <span class ="date"><?php echo $row['postedOn'];?></span>
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
                                            <div><?php echo $row['content_status'];?></div>
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
                        <?php
                                    }
                                }
                        ?>
                        <!-- Hiển thị tweet-answer -->
                            <div class="tabtweet" id="tweet-answer">
                                <div class="card card-body">
                                    <section class="post-tweet">
                                        <div class="card mb-3 post border-0" style="max-width: 700px;">
                                            <div class="row g-0">
                                                <a class="col-md-2" href="profile-follow.php">
                                                    <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                                                </a>
                                                <div class="col-md-9 ">
                                                    <div class="post_header container-fluid row">
                                                        <div class="col-md-10 post_header_left">
                                                            <a class="Name " href="profile.php"><strong>tennguoidung</strong></a>
                                                            <span>@tendangnhap></span>
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
                    </div>
            </div>
<?php
     include("template/footer.php");
?>