<?php
function prime($number)
{
    $i = (int) sqrt($number);
    $prime = true;
    for ($o = 2; $o <= $i; $o++) {
        if ($number % $o == 0) {
            $prime = false;
            break;
        }
    }
    return $prime;
}

echo (prime(1481) == 0) ? "false" : "true";
echo "<br>";
echo (prime(64) == 0) ? "false" : "true";
