<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/script.js"></script>
</head>
<body>
    
<main class="form-signin mb-5">
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
              <input type="password" class="form-control" id="inputpassword" name = "txtPass1" placeholder="Password" required>
              <label for="inputpassword">Mật khẩu</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="inputretypepassword" name = "txtPass2" placeholder="Password" required>
                <label for="inputretypepassword">Nhập lại mật khẩu</label>
              </div>
              <label >
                <input type="checkbox" value="remember-me"> Hiển thị mật khẩu 
              </label>
            </div>
            <div class="checkbox mb-3">
                
                <?php
                    if(isset($_GET['error'])){
                        echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                    }

                ?>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" name = "btnsignup">Đăng nhập</button>
            
            <p class="mt-5 mb-3 text-muted copy">&copy; 2021</p>
          </form>
       
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
