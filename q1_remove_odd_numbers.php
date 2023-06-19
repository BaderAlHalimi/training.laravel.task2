<?php
function odd($numbers)
{
    $array = array();
    foreach ($numbers as $key => $value) {
        if ($value % 2 == 0) {
            $array[$key] = $value;
        }
    }
    return $array;
}
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
print_r(odd($numbers));
