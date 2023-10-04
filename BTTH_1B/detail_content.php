<div class="detail-content row">
    <div class="col-4 detail-img">
        <img src="https://placehold.co/350x200" alt="" width="324px">
    </div>
    <div class="col-8 detail-para">
        <?php 
            $detailArray = json_decode($_GET['detail'],true);
        ?>
        <a href="#"><?=$detailArray['tieude']?></a>
        <p><span>Bài hát:</span><?=$detailArray['tieude']?></p>
        <p><span>Thể loại:</span><?=$detailArray['ten_tloai']?></p>
        <p><span>Tóm tắt:</span><?=$detailArray['tomtat']?></p>
        <p><span>Nội dung:</span><?=$detailArray['noidung']?></p>
        <p><span>Tác giả:</span><?=$detailArray['tac_gia']?></p>
    </div>
</div>