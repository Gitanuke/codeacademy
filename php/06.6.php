<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, su 3 parametrais: minimalus skaicius, maksimalus skaicius,
 * kiek atsitiktinių skaiciu sugeneruoti. Funkcija gražinti atsitiktinių skaičių masyvą.
 * Pademonstruoti funkcijos veikimą.
 */

function skaiciai ($a, $b, $c)
{
    $x = [];
    for ($i = 0; $i < $c; $i++) {
        $x [] = rand($a, $b);

    }
    return $x;
}

var_dump (skaiciai (2, 7, 11));

