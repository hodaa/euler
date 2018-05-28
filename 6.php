<?php

function sumSquare($limit) {
    $total = 0;
    for ($i = 0; $i <= $limit; $i++) {
        $total += pow($i, 2);
    }
    return $total;
}

function squareSum($limit) {
    $total = 0;
    for ($i = 0; $i <= $limit; $i++) {
        $total += $i;
    }
    return pow($total, 2);
}

function getDiffernece() {
    return squareSum(100) - sumSquare(100);
}

echo getDiffernece();
