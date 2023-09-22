<?php
$a = [ 'a' => ['b' => 0, 'c' => 1], 'b' => ['e' => 2, 'o' => ['b' => 3] ] ];

// Lấy giá trị có key 'b' bằng 3
$valueB = $a['b']['o']['b'];

// Lấy giá trị có key 'c' bằng 1
$valueC = $a['a']['c'];

echo "Giá trị có key 'b' là: $valueB<br>";
echo "Giá trị có key 'c' là: $valueC<br>";
print_r($a['a']);