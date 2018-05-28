<?php
$alaphaptic = range('A', 'Z');
$file_content = file_get_contents('p022_names.txt');
$names = explode(',', $file_content);
sort($names);
$total = 0;
foreach ($names as $name) {
    $words = str_split(trim($name, '"'));
    $weight = 0;
    foreach ($words as $letter) {
        $weight += (in_array($letter, $alaphaptic)) ? (array_search($letter, $alaphaptic)) + 1 : array_search($letter, $alaphaptic);
    }
    $name_index = array_search($name, $names) + 1;
    $total += $weight * $name_index;;

}

print_r($total);