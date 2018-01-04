<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus 5 parametrus ‐ skaičius,
 * funkcija turi paskaičiuoti aritmenitinį vidurkį, ištraukti šaknį ir padauginti iš 10. Rezultatą gražinti.
 * Iškviesti funkciją perduodant 5 parametrus (skaičius) ir parodyti rezultatą.

 */

function cap($a, $b, $c, $d, $e){
    return sqrt(($a+$b+$c+$d+$e)/5) *10;
}
echo cap(2,3, 5, 7, 8);