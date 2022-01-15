<?php
    $page_tittle="Twitter/Trang chủ";
     include("template/sidebar.php");
?>
<!-- main  -->
<main class="col-md-6 main border-start border-end">
    <!-- header-home  -->

    <div class="container-fluid">
    <a href="home.php" class="btnbl"><i class="bi bi-arrow-left fs-5"></i></a>
          

          <div class="row listUser ">
            <strong>Tweet</strong><br>
            
          </div>
          <div class="navbar-nav ms-auto mb-2 mb-lg-0">
      
      
           
            </button>


          </div>
          <div>

           

          </div>
    
    <!-- post-tweet  -->
    <?php


    
                        $conn = mysqli_connect('localhost','root','','twitter');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }

                        //truy vấn cơ sở dữ liệu
                        $result =mysqli_query($conn,"SELECT * FROM tweet INNER JOIN db_nguoidung on db_nguoidung.ma_nguoidung=tweet.ma_nguoidung  WHERE db_nguoidung.ma_nguoidung = $ma_nguoidung AND tweetID =".$_GET['id'] );
                        $product = mysqli_fetch_assoc($result);
                        
                ?>
    <section class="post-tweet">
        <div class="card mb-3 post border-0" style="max-width: 700px;">
            <div class="row g-0">
            <a class="col-md-2" href="profile.php">
                   <?php  $imageURL = 'uploads/'.$product["pofileImage"];
                   echo '<img src="'.$imageURL.'" alt="" class="rounded-circle ms-5" width="35" height="35">';?>
                </a>
                <div class="col-md-9 ">
                    <div class="post_header container-fluid row">
                        <div class="col-md-10 post_header_left">
                            <a class="Name " href="profile.php"><strong>
                                    <?php echo $product['tennguoidung'];?>
                                </strong></a>
                            <span>@
                                <?php echo $product['tendangnhap'];?>
                            </span>
                            <span class="date">
                                <?php echo $product['postedOn'];?>
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
                            <?php echo $product['content_status'];?>
                        </div>
                    </div>
                    <div class="post_footer">
                        <ul class="nav nav-pills nav-fill mt-3 me-5">
                            <li class="nav-item">
                                <a class="fs-5" href=""><i
                                        class="bi bi-chat"></i></a>
                            </li>
                            <!-- Modal -->
                            


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




    <div class="col-md-10">
                    <form action="them_bl.php?id=<?php echo $product['tweetID'];?>" method="post" enctype="multipart/form-data">
                        <textarea name="comment" placeholder="Bình luận" aria-label="Bình luận"
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
                                    <input class="bg-primary" type="submit" id="submit-tweet-button" value="BÌnh luận"
                                        role="button" >
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>



    <?php 
    $conn=mysqli_connect('localhost','root','','twitter');
    if(!$conn){
        die("kết nối thất bại");
    }
    $sql ="SELECT * FROM tweet , db_nguoidung WHERE db_nguoidung.ma_nguoidung = $ma_nguoidung AND tweetID =".$_GET['id'];
    $result = mysqli_query($conn,$sql);
        while($row =mysqli_fetch_assoc($result)){
  
    ?>
    
   

         <section class="thongbaoBL">
        <div class="card mb-3 post border-0" style="max-width: 700px;">
            <div class="row g-0">
            <a class="col-md-2" href="profile-follow.php">
                    <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="35" height="35">
                </a>
                <div class="col-md-9 ">
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

    <!-- post-tweet-follow -->
    
</main>
<?php
   include("template/footer.php")
?>