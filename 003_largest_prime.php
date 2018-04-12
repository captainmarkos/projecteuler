<?php

/*\
| | Project #3
| |
| | The prime factors of 13195 are 5, 7, 13 and 29.
| |
| | What is the largest prime factor of the number 600851475143 ?
\*/

$PRIME = 600851475143;
$largest_factor = 0;

for($i = 1; $i < $PRIME; $i++) {
    if($i % 2 == 0) { continue; }
    if($PRIME % $i != 0) { continue; }
    if(is_prime($i)) {
        echo "$i ";
        $largest_factor = ($i > $largest_factor) ? $i : $largest_factor;
    }
}

echo "\n\nLargest Prime Factor: $largest_factor\n";

function is_prime($n) {
    if($n <= 1) { return false; }
    if($n <= 3) { return true; }
    if($n % 2 == 0 || $n % 3 == 0) { return false; }

    for($i = 5; $i * $i <= $n; $i = $i + 6) {
        if($n % $i == 0 || $n % ($i+2) == 0) { return false; }
    }

    return true;
}

?>