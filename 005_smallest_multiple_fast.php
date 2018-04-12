<?php

/*\
| | Project #5
| |
| | 2520 is the smallest number that can be divided by each of the numbers
| | from 1 to 10 without any remainder.  What is the smallest positive number
| | that is evenly divisible by all of the numbers from 1 to 20?
| |
| | 1. For natural numbers 2..20 find decomosition into prime powers:
| |    2, 3, 2^2, 5, 2*3, 7, 2^3, 3^2, 2*5, 11, 2^2*3, 13, 2*7, 3*5, 2^4, 17, 2*3^2, 19, 2^2*5
| |
| | 2. For every prime power in the list above, collect those with highest exponent:
| |    2^4, 3^2, 5, 7, 11, 13, 17, 19
| |
| | 3. Result is the product of the collected prime powers from the previous step:
| |    2^4 * 3^2 * 5 * 7 * 11 * 13 * 17 * 19 = 232792560
\*/


/* NOTE: This is not my code, it's just for eye candy. */

function factors($num, $primes)
{
   $n = 1;
   $sqr = intval(floor(sqrt($num)));
   $arr[1] = 1;
   
   for($i = 0; $i < count($primes); $i++) {
      $this_pow = 0;
      while($num % pow($primes[$i], $this_pow + 1) == 0) {
         $this_pow++;
      }
      $arr[$primes[$i]] = $this_pow;
   }
   
   return $arr;
}

$primes = array(2, 3, 5, 7, 11, 13, 17, 19);
$facts = array();
$highest = array();

for($i = 1; $i <= 20; $i++)
   $facts[$i] = factors($i, $primes);
   
forEach($primes as $prime) {
   for($i = 1; $i <= 20; $i++) {
      $highest[$prime] = max($highest[$prime], $facts[$i][$prime]);
   }
}

$num = 1;

forEach($highest as $prime=>$pow) {
   $num *= pow($prime, $pow);
}

print $num . "\n";

?>
