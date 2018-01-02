<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas asociatyvinis masyvas iš 5 elementų ‐ teksto eilučių.
 * Panaudodami foreach ciklą pakeiskite visus masyvo elementus ‐ paversdami tekstą mazosiomis raidėmis, o pirmaja raide - didziaja.
 */
$m = [
    'a' => 'jonas',
    'b' => 'petras',
    'c' => 'dainius',
    'd' => 'herkus',
    'e' => 'sandra'
];
foreach($m as $key => $value) $m[$key] = ucfirst(strtolower($value));
var_dump($m);