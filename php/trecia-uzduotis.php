<?php
function uzduotis ($x, $y, $z){
   $rez =  (($x**2) + sqrt($y) + $x * $y + $z);
   return $rez;
}
    echo uzduotis (2,3,5);

?>