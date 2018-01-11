<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus du parametrus ‐ skaičius,
 funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kvadratų sumą padaugintą iš pi.
*/

function suma ($d, $e){
    $sum= ($d**2 + $e**2) * M_PI;
    return $sum;
}
echo suma (5,15);