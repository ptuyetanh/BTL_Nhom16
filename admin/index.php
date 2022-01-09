<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Twitter admin index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container-fluid">
    <div class="col-md-12 header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <i class="bi bi-twitter"></i>
          <a class="navbar-brand text-primary" href="#">Twitter Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-envelope-fill"></i>
                  Tin nhắn
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-bell-fill"></i>
                  Thông báo
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-gear-fill"></i>
                  Cài đặt
                </a>
              </li>
              </a>
              </li>

            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="row">
        <div class="col-md-3 sidebar">

          <nav class="navbar navbar-expand-md ">
            <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu"
              aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <i class="bi bi-twitter text-primary p-2"></i>
            </a>
            <div class="collapse navbar-collapse" id="sidebarMenu">
              <ul class="navbar-nav flex-column ">
                <li class="nav-item fs-5  p-0,5 mb-2">
                  <a class="nav-link " href=""><i class="bi bi-file-earmark-text-fill"></i>
                    Quản lý bài viết
                  </a>
                </li>
                <hr>
                <li class="nav-item fs-5 p-0,5 mb-2">
                  <a class="nav-link " href=""><i class="bi bi-sliders"></i>
                    Quản lý người dùng</a>
                </li>
                <hr>
                <li class="nav-item fs-5 p-0,5 mb-2">
                  <a class="nav-link " href=""><i class="bi bi-person-circle"></i>
                    Admin</a>
                </li>
                <hr>
                <li class="nav-item fs-5  p-0,5 mb-2">
                  <a class="nav-link " href=""><i class="bi bi-info-circle"></i>
                    Hỗ trợ</a>
                </li>
                <hr>
            </div>
        </div>
        <div class="col-md-9 main">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Mã người dùng</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Tên đăng nhập</th>
                <th scope="col">Email</th>
                <th scope="col">Mật khẩu</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>bibi@gmail.com</td>
                <td>12345</td>
                <td>hello</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>tutu@gmail.com</td>
                <td>34626</td>
                <td>hihi</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>bibi</td>
                <td>@twitter</td>
                <td>lala@gmail.com</td>
                <td>abcdgs</td>
                <td>huhu</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
</body>

</html>