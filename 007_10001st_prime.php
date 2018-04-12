<?php

/*\
| | Project #7
| | By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13,
| | we can see that the 6th prime is 13.
| |
| | What is the 10001st prime number?
\*/

$PRIME_TO_FIND = 10001;
$prime_found = 0;
$count = 0;

for($i = 1; ; $i++) {
    if(is_prime($i)) {
        $prime_found = $i;
        $count++;
        if($count == $PRIME_TO_FIND) { break; }
    }
}

echo "\n\nLast Prime found ($count): $prime_found\n";

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