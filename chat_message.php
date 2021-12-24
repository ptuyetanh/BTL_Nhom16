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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">hgdhj</div>
            <div class="col-md-4 message-left border-start border-end border-left">deafed</div>
            <!--Thiết kế khung chat để gán vào file message.php -->
            <div class="col-md-5  message-right border-end " style="padding: 0;">
                <div class="chat-header">
                    <nav class="navbar navbar-expand-lg navbar-light  message-right-header">
                        <div class="container-fluid">
                            <a class="nav-link text-dark" href="#">
                                <div class="container-fluid row">
                                    <div class="col-md-3">
                                        <img src="./img/no-image.png" alt="" class="rounded-circle me-5 mt-1" width="37"
                                            height="38">
                                    </div>
                                    <div class="col-md-9 ">
                                        <strong>tên người dùng</strong><br>
                                        <span>@tên đăng nhập</span>
                                    </div>
                                </div>
                            </a>
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item text-dark ">
                                    <a class="nav-link" href="#"><i class="bi bi-info-circle fs-4"></i></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <hr>
                <div class="chat-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 chat-main-left mt-5">
                                <img src="./img/no-image.png" alt="" class="rounded-circle " width="35"
                                height="35"> 
                                <a href="" class="link-dark text-decoration-none ms-1">tin nhan den</a><br>
                                <span class="ms-5">ngay</span>
                            </div>
                            <div class="col-md-3 chat-main-right">
                                <a href="" class="link-dark text-decoration-none text-light bg-primary">tin nhan den</a>
                                <span class="ms-5">ngay</span>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="chat-footer" aria-label="Bắt đầu một ti nhắn mới" role="complementary">
                    <span class="material-icons text-primary me-2 fs-3 mt-2">
                        image</span>
                    <span class="material-icons fs-4,5 text-primary me-2 fs-3 mt-2">
                        gif_box
                    </span>
                    <textarea name="input-message" placeholder="Bắt đầu một tin nhắn mới"
                        aria-label="Bắt đầu mọt tin nhắn mới" id="status-emoji" cols="56" rows="1"></textarea>
                    <a class="message-send" role="button" id="send-message"><i class="bi bi-send fs-4"></i></a>
                </aside>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>