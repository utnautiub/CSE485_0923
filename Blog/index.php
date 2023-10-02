<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>


<body>
        <h1 class="text-center">Tác Giả</h1>
        <a href="./manager/add.php"><button type="button" class="btn btn-primary">Thêm</button></a>
        <?php
            if(isset($_GET['mes'])){
                echo $_GET['mes'];
            }
        ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Tác Giả</th>
                <th scope="col">Hình Tác Giả</th>
                <th scope="col">Hành Động</th>
            </tr>
            </thead>
            <tbody>
            <?php
            try {
                $pdo =  new PDO("mysql:host=localhost;dbname=amnhac", "root", "buituantu");

            }catch (PDOException $e){
                echo "Ket noi khong thanh cong";
            }

            $sql = "Select * from tacgia";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $data = $stmt->fetchAll();

            foreach ($data as $row){
                $id = $row['ma_tgia'];
                $tenTgia = $row[1];
                $hinh_tgia = $row[2];

            ?>
            <tr>
                <th scope="row"><?=$id?></th>
                <td><?=$tenTgia?></td>
                <td><?=$hinh_tgia?></td>
                <td>
                    <form action=""  class="d-flex">
                        <a href="./manager/edit.php?ma_tgia=<?=$id?>&ten_tgia=<?=$tenTgia?>&hinh_tgia=<?=$hinh_tgia?>" class="btn btn-danger btn-sm me-1">
                            <i class="fa-solid fa-pen text-light"></i>
                        </a>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$id?>">
                            <i class="fa-solid fa-pen text-light"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?=$id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <a href="./process/process_delete.php?ma_tgia=<?=$id?>" class="btn btn-primary">Save changes</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>