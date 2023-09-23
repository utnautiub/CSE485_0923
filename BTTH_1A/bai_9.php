<?php
function convertToLowercase($array) {
    foreach ($array as &$item) {
        if (is_string($item)) {
            $item = strtolower($item);
        }
    }
    unset($item);

    return $array;
}

$arrs = ['1', 'B', 'C', 'E'];
$result = convertToLowercase($arrs);
var_dump($result);
$arrs = ['a', 0, null, false];
$result = convertToLowercase($arrs);
var_dump($result) ;
?>