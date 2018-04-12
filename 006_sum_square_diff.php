<?php

/*\
| | Project #6
| |
| | The sum of the squares of the first ten natural numbers is,
| |   1^2 + 2^2 + ... + 10^2 = 385
| |
| | The square of the sum of the first ten natural numbers is,
| |   (1 + 2 + ... + 10)^2 = 55^2 = 3025
| |
| | Hence the difference between the sum of the squares of the first ten
| | natural numbers and the square of the sum is 3025 - 385 = 2640.
| |
| | Find the difference between the sum of the squares of the first one
| | hundred natural numbers and the square of the sum.
\*/                                      

$MAX = 100;
$sum_squares = 0;
$square_sums = 0;

for($i = 1; $i <= $MAX; $i++) {
    $sum_squares += pow($i, 2);
    $square_sums += $i;
}

$square_sums = pow($square_sums, 2);

echo "Sum of Squares: $sum_squares\n";
echo "Square of Sums: $square_sums\n";
echo "Difference: $square_sums - $sum_squares = " . ($square_sums - $sum_squares) . "\n";

?>