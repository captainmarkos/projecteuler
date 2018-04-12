<?php

/*\
| | Project #25
| |
| | What is the index of the first term in the Fibonacci sequence to
| | contain 1000 digits?
\*/

// NOTE: PHP can't go out that far with numbers so boo!

echo "--> " . fibonacci(0) . "\n";

function fibonacci($n) {
    $prev = $n;
    $next = 1;
    $result = 0;

    for($i = 0; ; $i++) {
        $result = $prev + $next;
        $prev = $next;
        $next = $result;
echo $result . ", ";
        if(strlen((string)$result) >= 5) { break; }
    }

    return $result;
}

?>