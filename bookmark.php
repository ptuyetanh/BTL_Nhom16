<?php
    $page_tittle="Twitter/Dấu Trang";
     include("template/sidebar.php");
?>
            <!--main-->
            <div class="col-md-6 mainbookmarks border-start border-end ">
                <div class="col-md-8">
                    <div class="header_text">
                        <strong>Dấu trang</strong><br>
                    </div>
                    <span>@Tên đăng nhập</span>
                </div>
                <div class="col-md-2">
                    <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="40" height="40">
                </div>
                <div class="col-md-10 ">
                    <div class="post_header container-fluid row">
                        <div class="col-md-10 post_header_left">
                            <a class="Name " href=""><strong>Tên người dùng</strong></a>
                            <span>@tên đăng nhập</span>
                            <span>ngày</span>
                        </div>
                        <div class="col-md-2 post_header_right">
                            <i class="bi bi-three-dots "></i>
                        </div>
                    </div>
                    <div class="post_body ms-4">
                        <div> post text..... </div>
                    </div>
                </div>
            </div>
            <!--search-->
<?php
   include("template/footer.php")
?>