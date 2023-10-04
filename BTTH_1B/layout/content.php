<div class="content">
    <h3>Top Bài Hát Yêu Thích</h3>
    <div class="d-flex justify-content-between flex-wrap">
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            $pdo = new PDO('mysql:host=localhost;dbname=amnhac;charset=utf8', 'root', 'buituantu');
            $sql = "SELECT * FROM `baiviet`";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $data = $stmt->fetchAll();
            // print_r($data);
            foreach($data as $row):
            $tieude = $row['tieude'];
            $ten_bhat = $row['ten_bhat'];
            $tomtat = $row['tomtat'];
            $noidung = $row['noidung'];
            $ten_tloai = $pdo->query("SELECT ten_tloai FROM `theloai` WHERE ma_tloai = $row[ma_tloai]")->fetch()['ten_tloai'];
            $tac_gia = $pdo->query("SELECT ten_tgia FROM `tacgia` WHERE ma_tgia = $row[ma_tgia]")->fetch()['ten_tgia'];
            $detailArry = array("tieude"=>$tieude,"ten_bhat"=>$ten_bhat,"tomtat"=>$tomtat,"noidung"=>$noidung,"ten_tloai"=>$ten_tloai,"tac_gia"=>$tac_gia);
            $detailJson = json_encode($detailArry);
        ?>
        <div class="card-title row me-2">
            <div class="son-card ">
                <div class="card" style="width: 15rem;">
                    <a
                        href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/CSE485_0923/BTTH_1B/detail.php?detail=<?= urlencode($detailJson) ?>">
                        <img src="./image/600x400.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><?=$tieude?></p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
    </div>

</div>