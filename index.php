<?php
function countString($str, $value)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($a = substr($str, $i,  1) == $value) {
            $count = $count + 1;
        }
    }
    return $count;
}

$string = "asdadwadsdwda";
$value = "a";
echo countString($string, $value);