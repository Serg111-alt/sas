<?php
function callback($a, $b) {
    if ($a > $b)
        return 1;
    if ($a == $b)
        return 0;
    else
        return -1;
}

$arr = array("C","A","t");
uasort($arr, "callback"); 
print_r($arr);
