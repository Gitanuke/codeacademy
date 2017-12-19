<?php

$m = [5, 6, 2, 4, 3];
function sandauga ($mas, $skaicius) {
    for ($i=0; $i<count($mas); $i++)   $mas[$i] *= $skaicius;
    return $mas;
}

echo json_encode(sandauga ($m, 3)) . '<br>';


function dalyba ($mas, $skaicius){
    for ($i=0; $i<count($mas); $i++) $mas[$i] /= $skaicius;
    return $mas;
}
echo json_encode(dalyba ($m, 2)) . '<br>';


$m2 = ['Jonas', 'Antanas', 'Sandra', 'Joana']; //masyvo teksto simboliu skaiciu, parametras masyvas, echo rezultatas is funkcijos strlen skaiciuoja simboliu skaiciu
function susumavimas ($ma){
    $s = 0;
    for ($i = 0; $i < count($ma); $i++) { //figuriniai prie true , false, su if , whilte, for, ciklu vykdymo komandose
        // naudojami figurniai skliaustai, ($s=0) reikalingas kai sumuojame
        $s += strlen($ma[$i]);
    }
return $s;
}

echo susumavimas ($m2) . '<br>';










?>