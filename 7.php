<?php

function is_prime($n) {
    $flag = TRUE;
    for ($j = 2; $j < $n; $j++) {
        if ($n % $j == 0 && $n !== $j) {
            $flag = FALSE;
            return $flag;
        }
    }
    return $flag;
}

function getAllPrimes() {
    $primes=array();
    for ($i = 1; $i < 1000000; $i++) {
        if (is_prime($i)) {
            $primes[]=$i;
        }
    }
    return $primes;
}
$all=getAllPrimes();
//echo $all[5];
echo "<pre>";
print_r(getAllPrimes());
echo "<pre>";