<?php

function is_palindromic($str) {

    $flag = FALSE;
    for ($i = 0; $i < strlen($str) / 2; $i++) {
        $last = strlen($str) - ($i + 1);

        if ($str[$i] == $str[$last]) {
            //echo $str[$i]."*".$str[$last]."<br>";
            $flag = TRUE;
        } else {
            $flag = FALSE;
            break;
        }
    }
    return $flag;
}

function get_max_palindromic($i, $j) {
    $parr = array();
    $plaindromic = 0;
    for ($j = 100; $j < 999; $j++) {
        for ($i = 100; $i < 999; $i++) {
            $check = $i * $j;
            if (is_palindromic((string) $check)) {
                $parr[] = $check;
            }
        }
    }
    return max($parr);
}

var_dump(get_max_palindromic(999, 999));


