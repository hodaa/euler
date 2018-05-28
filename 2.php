<?php
//fabonicci
$total = 0;
$arr = [0, 1];
$i = 2;
while (end($arr) < 4000000) {

    $arr[] = $arr[$i - 2] + $arr [$i - 1];

    if ($arr[$i] % 2 == 0) {
        $total += (int) $arr[$i];
    }
    $i++;
}
echo $total;
