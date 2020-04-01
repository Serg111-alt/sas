<?php
function power($a,$b){
    $c = $a;
for ($i  = 1;$i < $b; $i++){
      $c *= $a;
}
return $c;
}
 echo power(2,3);