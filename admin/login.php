<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter/Login admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
   <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main class="form-loginadmin mt-5">
        <form class ="form-loginadmin" action="process-loginadmin.php" method = "post" >
            <i class="bi bi-twitter"></i>
            <h4 class="ms-4">Admin đăng nhập</h4>
          <div class="form-floating">
            <input type="text" id="inputEmail" name="txtUser" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Tên đăng nhập </label>
          </div>
          <div class="form-floating">
            <input type="password"  id="inputPassword" name="txtPass"  class="form-control" placeholder="Password">
            <label for="floatingPassword">Mật khẩu</label>
          </div>
      
          <div class="checkbox mb-3">
            <label >
                <input type="checkbox" class="form-checkbox" id="show-password" onclick="showloginpassword()"> Hiển thị mật khẩu 
            </label>
              <!-- <?php
                if(isset($_GET['error'])){
                    echo "<h5 style='color:red'> {$_GET['error']} </h5>";
                }

              ?> -->
               
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit" name = "btnLogIn">Đăng nhập</button>
          <p class="mt-5 mb-2 text-muted footer-copy">&copy; 2021</p>
        </form>
    <script src="./js/showpassword.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>