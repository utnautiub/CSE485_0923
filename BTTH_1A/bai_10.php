<?php
function convertToUppercase($array) {
    foreach ($array as &$item) {
        if (is_string($item)) {
            $item = strtoupper($item);
        }
    }
    unset($item);

    return $array;
}

$arrs = ['1', 'b', 'c', 'd'];
$result = convertToUppercase($arrs);
var_dump($result);

$arrs = ['a', 0, null, false];
$result = convertToUppercase($arrs);
var_dump($result);
?>