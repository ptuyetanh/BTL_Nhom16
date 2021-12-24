<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3 sidebar ">
                shfgsg
            </div>
            <!--main-->
            <div class="col-md-6 mainbookmarks border-start border-end ">
                <div class="main-header_text">
                    <div class="arrow">
                        <i class="bi bi-arrow-left"></i>
                    </div>
                    <div class="around">
                        <strong>Tên người dùng</strong><br>
                        <span>@Tên đăng nhập</span>
                    </div>
                </div>
                <!--cover area-->
                <div class="area_main ">
                    <img id="background" class="img-fluid" src="img/images5.jpg" alt="">
                </div>
                <div class=" profile">
                    <div class="profile_both">
                        <div class="profile_img">
                            <img src="img/no-image1.jpg" alt="">
                        </div>
                        <div class="profile_btn">
                            <button>Thiết lập hồ sơ</button>
                        </div>
                    </div>

                    <div class="text-user">
                        <strong>Tên người dùng</strong><br>
                        <span>@Tên đăng nhập</span>
                    </div>
                    <ul class="nav nav-tabs mb-3" id="myTab0" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link active"
                            id="tweet-tab0"
                            data-mdb-toggle="tab"
                            data-mdb-target="#tweet0"
                            type="button"
                            role="tab"
                            aria-controls="tweet"
                            aria-selected="true"
                          >
                          Tweets
                          </button>
                        </li>
                        <div class="tab-content" id="myTabContent0">
                            <section class="post-tweet">
                      <div class="card mb-3 post border-0" style="max-width: 700px;">
                          <div class="row g-0">
                              <div class="col-md-2">
                                  <img src="./img/no-image.png" alt="" class="rounded-circle ms-5" width="40" height="40">
                              </div>
                              <div class="col-md-10 ">
                                  <div class="post_header container-fluid row">
                                      <div class="col-md-10 post_header_left">
                                          <a class="Name " href=""><strong>Tên người dùng</strong></a>
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
                          </div>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="tweet-answer-tab0"
                            data-mdb-toggle="tab"
                            data-mdb-target="#tweet-answer0"
                            type="button"
                            role="tab"
                            aria-controls="tweet-answer"
                            aria-selected="false"
                          >
                           Tweet và câu trả lời
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="contact-tab0"
                            data-mdb-toggle="tab"
                            data-mdb-target="#contact0"
                            type="button"
                            role="tab"
                            aria-controls="contact"
                            aria-selected="false"
                          >
                           Phương tiện truyền thông
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button
                              class="nav-link"
                              id="media-tab0"
                              data-mdb-toggle="tab"
                              data-mdb-target="#media0"
                              type="button"
                              role="tab"
                              aria-controls="media"
                              aria-selected="false"
                            >
                             Thích
                            </button>
                          </li>
                      </ul>
                      <div class="tab-content" id="myTabContent0">
                        <div
                          class="tab-pane fade show active"
                          id="tweet-answer0"
                          role="tabpanel"
                          aria-labelledby="like-tab0"
                        >
                         
                        </div>
                        
                        <div class="tab-content" id="myTabContent0">
                          Tab 3 content
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