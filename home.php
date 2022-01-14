<?php
    $page_tittle="Twitter/Trang chủ";
     include("template/sidebar.php");
?>
<!-- main  -->
<main class="col-md-6 main border-start border-end">
    <!-- header-home  -->
    <nav class="navbar navbar-light header-home ">
        <div class="container">
            <strong class="fs-4">Trang chủ</strong>
        </div>
    </nav>
    <!-- tweet-status  -->
    <div class="tweet-status">
        <!-- status  -->
        <div class="card mb-3 status border-0" style="max-width: 700px;">
            <div class="row">
                <div class="col-md-2">
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
                            $imageURL = 'uploads/'.$row["pofileImage"];
                        echo '<img src="'.$imageURL.'" class="rounded-circle img-fluid ms-5"  width="35" height="35">';
                    }
                    }else{
                        echo '<img src="img/no-image1.jpg" alt="">';
                } ?>
                </div>
                <div class="col-md-10">
                    <form action="process-tweet.php" method="post" enctype="multipart/form-data">
                        <textarea name="content_status" placeholder="Bạn đang nghĩ gì?" aria-label="Bạn đang nghĩ gì"
                            id="content_status" autofocus></textarea>
                        <div id="tweet_post">
                            <div class="container-fluid row">
                                <div class="col-md-9">
                                    <label for="fileimage">
                                        <span class="material-icons text-primary me-2 ">
                                            image</span>
                                    </label>
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
                                    <input type="file" name="myFile" id="fileimage"
                                        style="position: absolute;width:0;height:0;right:0;left:108px;opacity: 0;">
                                    <input class="bg-primary" type="submit" id="submit-tweet-button" value="Tweet"
                                        role="button">
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
                <a class="col-md-2" href="profile.php">
                   <?php  $imageURL = 'uploads/'.$row["pofileImage"];
                   echo '<img src="'.$imageURL.'" alt="" class="rounded-circle ms-5" width="35" height="35">';?>
                </a>
                <div class="col-md-9 ">
                    <div class="post_header container-fluid row">
                        <div class="col-md-10 post_header_left">
                            <a class="Name " href="profile.php"><strong>
                                    <?php echo $row['tennguoidung'];?>
                                </strong></a>
                            <span>@
                                <?php echo $row['tendangnhap'];?>
                            </span>
                            <span class="date">
                                <?php echo $row['postedOn'];?>
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
                        <!-- modal xóa tweet -->
                        <div class="modal fade mt-5" id="deleteTwweetModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Xóa tweet</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Điều này không thể hoàn tác và nó sẽ bị xóa khỏi hồ sơ của bạn, dòng thời
                                            gian của bất kỳ tài khoản nào theo dõi bạn và kết quả tìm kiếm Twitter.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary pe-5 ps-5"
                                            data-bs-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-primary pe-5 ps-5">Xóa</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post_body ms-4">
                        <div>
                            <?php echo $row['content_status'];?>
                        </div>
                    </div>
                    <div class="post_footer">
                        <ul class="nav nav-pills nav-fill mt-3 me-5">
                            <li class="nav-item">
                                <a class="fs-5" href="" data-bs-toggle="modal" data-bs-target="#modelCOMMENT"><i
                                        class="bi bi-chat"></i></a>
                            </li>
                            <!-- Modal -->
                            <div class="modal fade" id="modelCOMMENT" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body row">
                                            <div class="reply-container">
                                                <div class="reply-wrapper-image">
                                                    <a class="" href="profile-follow.php">
                                                        <img src="./img/no-image.png" alt="" class="rounded-circle "
                                                            width="40" height="40">
                                                    </a>
                                                </div>
                                                <div class="reply-container-wrapper">
                                                    <div class="reply-container-desc">
                                                        <div class="reply-user-fullName">
                                                            Daniel Brown
                                                        </div>
                                                        <div class="reply-username">
                                                            @brown
                                                        </div>
                                                        <div class="reply-date">
                                                            <span class="reply-date-time">.</span>1h
                                                        </div>
                                                    </div>
                                                    <div class="reply-desc-text">
                                                        hello
                                                    </div>
                                                    <div class="reply-to-desc">
                                                        <span class="reply-to">
                                                            Reply to
                                                        </span>
                                                        <a href="" class="reply-username-link">@brown</a>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vetical-pip"></div>
                                            <div class="reply-user-msg">
                                                <div class="reply-wrapper-image">
                                                    <a class="" href="profile-follow.php">
                                                        <img src="./img/no-image.png" alt="" class="rounded-circle "
                                                            width="40" height="40">
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="model-footer " id="error_status">
                                                <textarea class="replytxt" id="replyInput"
                                                    placeholder="Tweet câu trả lời của bạn"></textarea>
                                            </div>
                                            <button class="reply-btn" id="replyBtn" role="button">
                                                Reply
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
                        }
                ?>
    <!-- post-tweet-follow -->
    <section class="post-tweet">
        <div class="card mb-3 post border-0" style="max-width: 700px;">
            <div class="row g-0">
                <a class="col-md-2" href="profile-follow.php">
                    <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                </a>
                <div class="col-md-9 ">
                    <div class="post_header container-fluid row">
                        <div class="col-md-10 post_header_left">
                            <a class="Name " href="profile-follow.php"><strong>tennguoidung</strong></a>
                            <span>@tendangnhap</span>
                            <span class="date">ngày</span>
                        </div>
                        <div class="col-md-2 post_header_right">
                            <div class="dropdown">
                                <a type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots "></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#">Xóa bài viết </a></li>
                                    <li><a class="dropdown-item" href="#">Sửa bài viết</a></li>
                                    <li><a class="dropdown-item" href="#"></a>Báo cáo vi phạm</li>
                                </ul>
                            </div>
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
<?php
   include("template/footer.php")
?>