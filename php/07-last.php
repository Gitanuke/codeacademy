<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 3 elementų ‐ teksto eilučių.
 Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis.
 */

$m = ['LABAS','RYTAS','KOLEGOS'];
$i=0;
foreach ($m as $sv){
    $m[$i++]= strtolower($sv) ;
}
var_dump($m);