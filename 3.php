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

function get_factors($num) {
    $factors = array();
    $i = 2;
    while ($i < $num) {
        if (fmod($num, $i) == 0) { // not prime
            $rest = $num / $i;
            if (is_prime($rest)) {
                $factors[] = (int) $rest;
                break;
            } else {
                $num = $rest;
                $i = 2;
            }
        } else {
            $i++;
        }
    }
    return $factors;
}

$result = get_factors(600851475143);
var_dump($result);
