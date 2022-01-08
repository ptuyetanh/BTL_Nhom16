<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter/Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    
<main class="form-signin mt-5">
    <div class="container">
        <form class="form-signup" autocomplete action="process-signup.php" method="post"> 
            <i class="bi bi-twitter"></i>
            <h1 class="h3 mb-3 fw-normal"> Đăng ký twitter</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="txtname" name ="txtname" placeholder="Tên người dùng" required autofocus>
                <label for="txtname">Tên người dùng</label>
              </div> 
              <div class="form-floating">
                <input type="text" class="form-control" id="txtuser" name = "txtuser" placeholder="Tên đăng nhập" required autofocus>
                <label for="txtuser">Tên đăng nhập</label>
              </div> 
            <div class="form-floating">
              <input type="email" class="form-control" id="inputemail" name = "txtemail" placeholder="name@example.com" required autofocus aria-describedby="emailHelp">
              <label for="inputemail">Email </label>
              <small id="emailHelp" class="form-text"></small>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="inputpassword1" name = "txtPass1" placeholder="Password" required autofocus aria-describedby="pass1Help">
              <label for="inputpassword1">Mật khẩu</label>
              <small id="pass1Help" class="form-text"></small>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="inputpassword2" name = "txtPass2" placeholder="Password" required autofocus aria-describedby="pass2Help">
                <label for="inputpassword2">Nhập lại mật khẩu</label>
                <span id='message'></span>
                <script>
                  $('#inputpassword1, #inputpassword2').on('keyup', function () {
                    if ($('#inputpassword1').val() == $('#inputpassword2').val()) {
                        $('#message').text('Mật khẩu khớp').css('color', 'green');
                    } else 
                        $('#message').text('Mật khẩu không khớp').css('color', 'red');
                   });
                </script>
            </div>
            <div class="checkbox mb-3">
            <label >
                <input type="checkbox" class="form-checkbox ms-5" id="show-password" onclick="showsignuppassword()"> Hiển thị mật khẩu 
              </label> 
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name = "btnsignup">Đăng kí</button>
          </form>
     </div>
  </main>
    <script src="./js/showpassword.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
