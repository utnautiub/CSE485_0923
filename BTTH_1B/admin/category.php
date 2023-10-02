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
            include "../connect.php";
            require ('./layout/header.php') 
        ?>
        <?php
             if(isset($_GET['message'])){
            echo "<div id='alert' class='alert alert-{$_GET['type']}'>{$_GET['message']}</div>";
            }
        ?>
        <div class="category-management php">
            <a href="./add_category.php">
                <button type="button" class="btn btn-success m-2">Thêm mới</button>
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
                    <?php
                        $data = Mysql::select("select * from theloai order by ma_tloai");
                        foreach($data as $row):
                            $id = $row['ma_tloai'];
                            $ten_tloai = $row['ten_tloai'];
                   ?>
                    <tr>
                        <th scope="row"><?php echo $id;?></th>
                        <td><?php echo $ten_tloai;?></td>
                        <td><a href="./edit_category.php?id=<?php echo $id;?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <button data-bs-toggle="modal" data-bs-target="#modal<?=$id?>">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="modal<?=$id?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <a href="../manager/delete_category_manager.php?=$id<?= $id;?>"><button
                                            type="button" class="btn btn-primary">Xác
                                            nhận</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <?php
            require ('./layout/footer.php') 
        ?>
    </div>

</body>

</html>