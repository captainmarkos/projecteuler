<?php

/*\
| | Project #5
| |
| | 2520 is the smallest number that can be divided by each of the numbers
| | from 1 to 10 without any remainder.  What is the smallest positive number
| | that is evenly divisible by all of the numbers from 1 to 20?
\*/

$MAX = 20;
$success = false;

for($i = $MAX; ; $i++) {
    for($j = 1; $j <= $MAX; $j++) {
        if($i % $j != 0) { break; }
        if($j == $MAX) { $success = true; }
    }

    if($success) {
        echo "Smallest number that can be divided by each " .
             "of the numbers 1 to $MAX: $i\n";
        break;
    }
}


?>