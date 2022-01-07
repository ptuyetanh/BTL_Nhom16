<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter/Admin index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/BTL_Nhom16/css/style.css">
</head>
<body>
    <header class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Trang chủ</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Quản lý bài viết</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Quản lý người dùng</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Admin</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" href="#">Hỗ trợ</a>
                          </li>
                        </li>
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
                       <div class="search">
                        <nav class="navbar navbar-light ">
                            <div class="container-fluid">
                              <form class="d-flex">
                                <input class="form-control ms-5 mt-5 mb-5" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success mt-5 mb-5" type="submit">Search</button>
                              </form>
                            </div>
                          </nav>
                          
                       </div>

                  <div class="container">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Mã người dùng</th>
                                <th scope="col">Tên đăng nhập</th>
                                <th scope="col">Tên người dùng</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mật khẩu</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Lan Hương</td>
                                <td>@Lanhuong123</td>
                                <td>huong@gmail.com</td>
                                <td>1234556</td>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>@Thornton</td>
                                <td>hfsb@gmail.com</td>
                                <td>edffg</td>
                                <td>0</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td >Larry the Bird</td>
                                <td>@twitter</td>
                                <td>dhf@gmail.com</td>
                                <td>1364t6</td>
                                <td>1</td>
                              </tr>
                            </tbody>
                          </table>
                  </div>
            </div>
        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>