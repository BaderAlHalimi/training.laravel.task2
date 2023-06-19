<?php
function longest($string, &$index)
{
    $maxlength = 0;
    foreach ($string as $key => $value) {
        if (strlen($value) > $maxlength) {
            $maxlength = strlen($value);
            $index = $key;
        }
    }
    return $string[$index];
}
$index = 0;
$string = ["Bader", "Hello", "Hi", "Welcome"];
echo longest($string, $index);
echo "<br>" . $index;
