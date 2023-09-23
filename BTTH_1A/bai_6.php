<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array();

// Duyệt qua mảng $keys để tạo mảng kết quả
foreach ($keys as $key => $value) {
    // Kiểm tra xem $key có tồn tại trong $values không
    if (array_key_exists($key . "value", $values)) {
        // Thêm giá trị từ mảng $keys và mảng $values vào mảng kết quả
        $keysAndValues[$value] = $values[$key . "value"];
    }
}

print_r($keysAndValues);
