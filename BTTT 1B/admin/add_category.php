<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thể Loại</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./admin-css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script defer src="./active.js"></script>
</head>

<body>
    <div class="container p-5">
        <?php
            require ('./layout/header.php') 
        ?>
        <div class="category-management php">
            <a href="./edit_category.php">
                <button type="button" class="btn btn-success">Thêm mới</button>
            </a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Nhạc trữ tình</td>
                        <td><i class="bi bi-pencil-square"></i></td>
                        <td><i class="bi bi-trash"></i></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Nhạc cách mạng</td>
                        <td><i class="bi bi-pencil-square"></i></td>
                        <td><i class="bi bi-trash"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php
            require ('./layout/footer.php') 
        ?>
    </div>

</body>

</html>