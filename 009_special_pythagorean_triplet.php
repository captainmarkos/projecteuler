<?php

/*\
| | Project #9
| |
| | A Pythagorean triplet is a set of three natural numbers, a < b < c, for which,
| | a^2 + b^2 = c^2
| |
| | For example, 3^2 + 4^2 = 9 + 16 = 25 = 5^2.
| |
| | There exists exactly one Pythagorean triplet for which a + b + c = 1000.
| | Find the product abc.
| |
| | Using to solve: (3n)^2 + (4n)^2 = (5n)^2
| |
| | a = n^2 - m^2
| | b = 2*n*m
| | c = n^2 + m^2
| |
\*/

$TARGET = 1000;
$found = false;

// BRUTE FORCE!
for($n = 2; ; $n++) {
    for($m = 1; $m < 10; $m++) {
        $a = pow($n, 2) - pow($m, 2);
        $b = 2 * $n * $m;
        $c = pow($n, 2) + pow($m, 2);

        if(($a + $b + $c) >= $TARGET) {
            echo "a = $a\n";
            echo "b = $b\n";
            echo "c = $c\n";
            echo "($a + $b + $c) = " . ($a + $b + $c) . "\n";
            echo "------------\n";
            echo "KABAM!\n";
            $found = true;
            break;
        }
    }
    if($found && $n > 100) { break; }
    else { $found = false; }
}

?>
