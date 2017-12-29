<?php
/**
Sukurkite php skripta, kuriame butu surasyta funkcija, kuriai padavus tris parametrus - skaicius, funkcija turi grazinti rezultata-parametru suma.
 */

function suma ( $a, $b, $c)
{
    $sum = $a + $b + $c;

    return $sum;
}
echo suma (5, 6,7);