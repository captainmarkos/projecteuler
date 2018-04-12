<?php

/*\
| | Project #4
| |
| | A palindromic number reads the same both ways. The largest palindrome
| | made from the product of two 2-digit numbers is 9009 = 91 × 99.
| |
| | Find the largest palindrome made from the product of two 3-digit numbers.
\*/

$palindromes = array();

for($i = 999; $i > 99; $i--) {
    for($j = 999; $j > 99; $j--) {
        $possible_palindrome = $i * $j;
        $reversed = strrev((string)$possible_palindrome);
        if($reversed == (string)$possible_palindrome) {
            $palindromes[$possible_palindrome] = "$i * $j";
        }
    }
}

$keys = array_keys($palindromes);
sort($keys);
$largest = end($keys);
$multipliers = $palindromes[$largest];

echo "Palindrome: $multipliers = $largest\n";

?>