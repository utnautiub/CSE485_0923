<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
  ];

  $firstElement = reset($numbers);
  $lastElement = end($numbers);

  echo "Phần tử đầu tiên: $firstElement" ."<br>" . PHP_EOL;
  echo "Phần tử cuối cùng: $lastElement" ."<br>" . PHP_EOL;

  $minValue = min($numbers);
  $maxValue = max($numbers);
  $sum = array_sum($numbers);

  echo "Số nhỏ nhất: $minValue" ."<br>" . PHP_EOL;
  echo "Số lớn nhất: $maxValue" ."<br>" . PHP_EOL;
  echo "Tổng các giá trị: $sum" ."<br>" . PHP_EOL;

  asort($numbers);
  echo "<br>";
  var_dump($numbers);

  arsort($numbers);
  echo "<br>";
  var_dump($numbers);

  ksort($numbers);
  echo "<br>";
  var_dump($numbers);

  krsort($numbers);
  echo "<br>";
  var_dump($numbers);
  ?>