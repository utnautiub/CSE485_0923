<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container p-5">
        <div class="header row">
            <div class="col-6 header-left">
                <img src="./image/logo.jpg" alt="logo" width="200px" height="100px">
                <a style="font-weight: bold;" href="#">Trang Chủ</a>
                <a href="#">Đăng Nhập</a>
            </div>

            <div class="col-6 header-right">
                <div class="input-group">
                    <div id="search-autocomplete" class="form-outline">
                        <input style="box-shadow: none;" type="search" id="form1" class="form-control"
                            placeholder="Search" />
                    </div>
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="slider">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./image/banner-chao-nam-hocthumb.jpg" alt="Los Angeles" width="1100" height="400" />

                    </div>
                    <div class="carousel-item">
                        <img src="./image/banner-hoi-nghi-khoa-hocthumb.jpg" alt="Chicago" width="1100" height="400" />

                    </div>
                    <div class="carousel-item">
                        <img src="./image/web1.jpg" alt="New York" width="1100" height="400" />

                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <div class="content">
            <h3>Top Bài Hát Yêu Thích</h3>
            <div class="card-title row">
                <div class="col-3 son-card ">
                    <div class="card" style="width: 15rem;">
                        <img src="./image/600x400.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Cây, lá và gió</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 son-card ">
                    <div class="card" style="width: 15rem;">
                        <img src="./image/600x400.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Cuộc sống mến thương</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 son-card ">
                    <div class="card" style="width: 15rem;">
                        <img src="./image/600x400.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Lòng mẹ</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 son-card ">
                    <div class="card" style="width: 15rem;">
                        <img src="./image/600x400.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Phôi pha</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 son-card ">
                    <div class="card" style="width: 15rem;">
                        <img src="./image/600x400.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Nơi tình yêu bắt đầu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                <a href="#">TLU'S MUSIC GARDEN</a>
            </div>
        </div>
    </div>
</body>

</html>