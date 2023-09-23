<?php
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

function tinhTong($arr) {
    if (!is_array($arr) || empty($arr)) {
        echo "Mảng không hợp lệ hoặc rỗng, không thể tính tổng <br> \n";
        return null;
    }

    return array_sum($arr);
}

function tinhTich($arr) {
    if (!is_array($arr) || empty($arr)) {
        echo "Mảng không hợp lệ hoặc rỗng, không thể tính tích <br> \n";
        return null;
    }

    return array_product($arr);
}

function tinhHieu($arr) {
    if (!is_array($arr) || empty($arr)) {
        echo "Mảng không hợp lệ hoặc rỗng, không thể tính hiệu <br> \n";
        return null;
    }

    return array_reduce($arr, function ($carry, $item) {
        return $carry - $item;
    }, 0);
}

function tinhThuong($arr) {
    if (!is_array($arr) || empty($arr)) {
        echo "Mảng không hợp lệ hoặc rỗng, không thể tính thương <br> \n";
        return null;
    }

    if (in_array(0, $arr)) {
        echo "Mảng chứa số 0, không thể tính thương <br> \n";
        return null;
    }

    return array_reduce($arr, function ($carry, $item) {
        return $carry / $item;
    }, $arr[0]);
}

$tong = tinhTong($arrs);
$tich = tinhTich($arrs);
$hieu = tinhHieu($arrs);
$thuong = tinhThuong($arrs);

if ($tong !== null) {
    echo "Tổng các phần tử = " . implode(" + ", $arrs) . " = $tong<br> \n";
}

if ($tich !== null) {
    echo "Tích các phần tử = " . implode(" * ", $arrs) . " = $tich<br> \n";
}

if ($hieu !== null) {
    echo "Hiệu các phần tử = " . implode(" - ", $arrs) . " = $hieu <br> \n";
}

if ($thuong !== null) {
    echo "Thương các phần tử = " . implode(" / ", $arrs) . " = $thuong<br> \n";
}