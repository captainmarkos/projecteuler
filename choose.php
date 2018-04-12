<?php


echo "choose(4, 3): " . choose(4, 3) . "\n";


function choose($n, $r) {
    /*\
    | | Remember that n choose r is:
    | |
    | |       n!
    | |    --------
    | |    r!(n-r)!
    \*/

    // returns the value of n choose r
    $min = 0;
    $product = 1;

    $n_r = $n - $r;
    if($r < $n_r) { $min = $r; }
    else          { $min = $n_r; }

    for($k = 1; $k <= $min; $k++) {
        $product = $product * ($n - $k +1) / $k;
    }

    return $product;
}

?>