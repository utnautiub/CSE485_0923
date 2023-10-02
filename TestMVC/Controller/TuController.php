<?php
require dirname(__FILE__ , 2) . '/Model/TuModel.php';

class TuController {
    function read() {
        $aps = '';
        $query = $_GET['name'];
        $tuModel = new TuModel();
        $hit10cai = $tuModel->hitdat10cai();
        $day2 = $hit10cai[1];
        include dirname(__FILE__, 2) . '/View/Tu/TuReadView.php';
    }
    function create() {

    }
    function update() {

    }
    function delete() {}
}