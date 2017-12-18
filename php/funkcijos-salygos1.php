<?php
function lyg ($a, $b)
{
    if ($a > $b) return true;
    else return false;
}

function lyg1 ($a, $b){
    return $a > $b;
}

echo '<br>';

$c = lyg (5,5);
if ($c) echo 'daugiau';
else echo 'nedaugiau';

echo '<br>';

if (lyg1 (6,5)) echo 'daugiau';
else echo 'nedaugiau';