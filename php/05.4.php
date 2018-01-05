<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas taksi automobilio asociatyvinis masyvas,
 * kurio raktai yra: gamintojas, modelis, metai, vairuotojai. Vairuotojai taip pat turi būti asociatyvinis masyvas,
 * kurio raktai: vardas, pavarde, stazas.

 */


$m = [
   ['gamintojas'=>'bmw', 'modelis'=>'320i','metai'=>2005, 'vairuotojai'=>
    ['vardas'=>'Rimas', 'pavarde'=>'Rimaitis', 'stazas'=>2],

]];

var_dump($m);