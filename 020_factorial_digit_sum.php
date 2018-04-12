<?php

/*\
| | Project #20
| |
| | n! means n * (n - 1) * ... * 3 * 2 * 1
| |
| | For example, 10! = 10 * 9 * ... * 3 * 2 * 1 = 3628800, and the sum
| | of the digits in the number 10! is 3 + 6 + 2 + 8 + 8 + 0 + 0 = 27.
| |
| | Find the sum of the digits in the number 100!
\*/

// NOTE: PHP represents large number in scientific notation
// so this will not work for 100!

$n = 10;
$result = factorial($n);
$sum = sum_digits($result);

echo "$n! = " . factorial($n) . "\n";
echo "sum of digits = $sum\n";

function factorial($n) {
    if($n == 1) { return 1; }

    return factorial($n -1) * $n;
}

function sum_digits($n) {
    $s = (string)$n;
    $len = strlen($s);
    $sum = 0;
    for($i = 0; $i < $len; $i++) {
        $sum += (int)substr($s, $i, 1);
    }
    return $sum;
}

?>