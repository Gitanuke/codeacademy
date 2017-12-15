<?php
$a = '6 ' == 3;
var_dump ($a);

$a = '6' ===6;
var_dump($a);

$a = 6 ===6;
var_dump($a);

$a = 'a' !='b';
var_dump($a);

$a = 1;
echo ++$a . "<br>";
echo $a++ . "<br>";
echo $a . "<br>";

$a = 5;
echo --$a . "<br>";
echo $a-- . "<br>";
echo $a . "<br>";

$x = 5; $y=10;
$a = $x == 5 && $y <10;
var_dump($a);

$a = $x == 5 && $y >=10;
var_dump($a);

$a = $x == 5 || $y <10;
var_dump($a);

$a = $x == 5 &&! ($y <10);
var_dump($a);
$a = ($x == 5 xor $y ==10);
var_dump($a);

?>