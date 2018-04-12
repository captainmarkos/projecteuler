<?php

/*\
| | Project #10
| |
| | The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.
| |
| | Find the sum of all the primes below two million.
\*/

$LIMIT = 2000000;
$sum = 0;

for($i = 2; $i < $LIMIT; $i++) {
    if(is_prime($i)) {
//        echo "$i ";
        $sum += $i;
    }
}

echo "\n\nsum: $sum\n";

/*
function is_prime($n) {
    if($n <= 1) { return false; }
    if($n <= 3) { return true; }
    if($n % 2 == 0 || $n % 3 == 0) { return false; }

    $i = 5;
    $w = 2;

    while($i * $i <= $n) {
        if($n % $i == 0) { return false; }

        $i += $w;
        $w = 6 - $w;
    }

    return true;
}
*/

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