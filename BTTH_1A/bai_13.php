<?php
  $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

  // Tính giá trị trung bình của mảng
  $average = array_sum($numbers) / count($numbers);
  echo "Giá trị trung bình: $average" ."<br>" . PHP_EOL;

  // Liệt kê các số lớn hơn giá trị trung bình
  $greaterThanAverage = array_filter($numbers, function ($number) use ($average) {
      return $number > $average;
  });
  echo "Các số lớn hơn giá trị trung bình: " . implode(', ', $greaterThanAverage) ."<br>" . PHP_EOL;

  // Liệt kê các số nhỏ hơn hoặc bằng giá trị trung bình
  $lessThanOrEqualAverage = array_filter($numbers, function ($number) use ($average) {
      return $number <= $average;
  });
  echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: " . implode(', ', $lessThanOrEqualAverage) ."<br>" . PHP_EOL;
  ?>