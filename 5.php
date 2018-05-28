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

function smallest_num_without_reminder($limit) {
    $result = 6;
    for ($i = 2; $i < $limit; $i++) {

        if ($result % $i != 0) {
            if (is_prime($i)) {
                $result = $result * $i;
            } else {
                for ($j = 2; $j > 0; $j++) {
                    if ($i % $j == 0) {
                        $result = $result * $j;
                        break;
                    }
                }
            }
        }
    }
    return $result;
}
echo smallest_num_without_reminder(20);
