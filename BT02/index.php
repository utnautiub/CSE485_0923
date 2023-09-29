<?php
    $list_nav = array("User", "CMS", "Config", "Dashboard", "Courses", "Instructor", "Apps", "Charts", "Bootstrap", "Plugins", "Widget", "Forms", "Table", "Pages");
    $list_icon = array("bi bi-person", "bi bi-box", "bi bi-gear-fill", "bi bi-dash-square", "bi bi-book", "bi bi-people", "bi bi-exclamation-circle", "bi bi-gear-wide-connected", "bi bi-star", "bi bi-heart", "bi bi-gear-wide", "bi bi-file-earmark-check", "bi bi-file-earmark-bar-graph", "bi bi-file-earmark-break");
    $amount_nav = count($list_nav);
    $amount_icon = count($list_icon);
    ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Left -->
            <div class="col-2">
                <div class="image-logo d-flex justify-content-center align-items-center">
                    <img src="./image/w3.png" alt="w3" height="48">
                    <img src="./image/cms.png" alt="cms" height="44">
                </div>
                <div class="nav-menu">
                    <ul class="nav flex-column">
                        <?php for ($i = 0; $i < $amount_nav; $i += 1) { ?>
                        <li class="nav-item">
                            <a id="menu-item" class="nav-link position-relative"
                                href="./nav-menu/<?= $list_nav[$i]?>.php#<?= $list_nav[$i] ?>"> <span><i
                                        class="<?= $list_icon[$i%$amount_icon] ?>"></i></span> <?= $list_nav[$i] ?>
                                <span class="span-caret position-absolute"><i
                                        class="bi bi-caret-right-fill"></i></span></a>

                        </li>

                        <?php } ?>
                        <a href="#"> <span><i class="bi bi-box-arrow-in-left"></i></span> Logout</a>
                    </ul>
                </div>
            </div>
            <!-- Right -->
            <div class="col-10 p-0">
                <div class="header d-flex justify-content-between ">
                    <div id="title" class="title"> <span><i class="bi bi-list"></i></span> User </div>
                    <div class="search">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <span class="input-group-text border-0" id="search-addon">
                                <i class="bi bi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="content p-5">
                    <button type="button m-2" class="btn btn-primary">Add User</button>
                    <?php
                        echo " <div class='alert alert-{$_GET['type']} mt-3'>{$_GET['message']}</div>";
?>

                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col">Password</th>
                                <th scope="col">Creation Time</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                    include "./connect/queryMySQL.php";
                                     $mysql = new QueryMySQL();
                                     $data =  $mysql->select("select * from users limit 15");
                                     foreach($data as $row):
                                        $id = $row['userid'];
                                        $name = $row['username'];
                                        $email = $row['email'];
                                        $password = $row['pass'];
                                        $created_at = $row['created_at'];                                 
                                ?>
                            <tr>
                                <th scope="row"><?= $id; ?></th>
                                <td><?= $name; ?></td>
                                <td><?= $email; ?></td>
                                <td><?= $password; ?></td>
                                <td><?= $created_at; ?></td>
                                <td><a href="#"><i class="bi bi-eye"></i></a></td>
                                <td><a href=""><i class="bi bi-pencil-square"></i></a></td>
                                <td><button href="#" data-bs-toggle="modal" data-bs-target="#modal<?=$id?>"><i
                                            class="bi bi-trash3"></i></button>
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
                                            <a href="./admin/manager/delete.php?id=<?= $id;?>"><button type="button"
                                                    class="btn btn-primary">Xác
                                                    nhận</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <script>
    const nameLink = document.querySelectorAll('#menu-item');
    const title = document.querySelector("#title");
    nameLink.forEach(link => {
        link.addEventListener('click', (e) => {
            const titleContent = e.target.textContent;
            title.innerHTML = `<span><i class="bi bi-list"></i></span> ${titleContent}`;
        })
    })
    </script>
</body>

</html>