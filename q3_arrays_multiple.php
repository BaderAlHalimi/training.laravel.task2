<?php
function multiple($arr1, $arr2)
{
    $arr3 = array();
    $index = 0;
    foreach ($arr1 as $value) {
        if (isset($arr2[$index])) {
            $arr3[] = $value * $arr2[$index];
            $index++;
        } else {
            $arr3[] = $value;
        }
    }
    for ($index; $index < count($arr2); $index++) {
        $arr3[] = $arr2[$index];
    }
    return $arr3;
}
print_r(multiple([1, 2, 3, 4], [1, 2, 3, 4, 7]));

echo '<br>';

// make this by recursion method!!
function multiple1($arr1, $arr2,$in = 0)
{
    $arr3 = array();
    if (count($arr1) == 0) {
        return $arr2;
    }
    if(count($arr2)==0){
        return $arr1;
    }
    $mu = $arr1[$in] * $arr2[$in];
    $arr3[] = $mu;
    unset($arr1[$in]);
    unset($arr2[$in]);
    $arr = multiple1($arr1, $arr2 ,++$in);
    foreach ($arr as $value) {
        $arr3[] = $value;
    }
    return $arr3;
}
print_r(multiple1([1, 2, 3, 4], [1, 2, 3, 4, 7]));
