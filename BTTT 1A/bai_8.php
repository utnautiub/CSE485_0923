<?php

$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$maxLength = 0;
$minLength = PHP_INT_MAX;
$maxString = '';
$minString = '';

foreach ($array as $string) {
    $length = strlen($string);

    if ($length > $maxLength) {
        $maxLength = $length;
        $maxString = $string;
    }

    if ($length < $minLength) {
        $minLength = $length;
        $minString = $string;
    }
}

echo "Chuỗi lớn nhất là $maxString, độ dài = $maxLength <br>" . PHP_EOL;
echo "Chuỗi nhỏ nhất là $minString, độ dài = $minLength" . PHP_EOL;
?>