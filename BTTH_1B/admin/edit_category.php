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
        <h3 style="text-align: center; font-weight: 700;" class="my-3">SỬA THÔNG TIN THỂ LOẠI</h3>
        <form method="post" action="../manager/update_category_manager.php">
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Mã Thể Loại</span>
                <input name="ma_tloai" readonly value="<?= $_GET['id'] ?>" type="text" class="form-control"
                    aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Tên Thể Loại</span>
                <input name="ten_tloai" type="text" class="form-control" aria-label="Username"
                    aria-describedby="addon-wrapping">
            </div>
            <div class="button-add-back">
                <button type="submit" class="btn btn-success m-2">Lưu Lại</button>
                <a href="./category.php">
                    <button type="button" class="btn btn-warning m-2">Quay Lại</button>
                </a>
            </div>
        </form>

        <?php
            require ('./layout/footer.php') 
        ?>
    </div>

</body>

</html>