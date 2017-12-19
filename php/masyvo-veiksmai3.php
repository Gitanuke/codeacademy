<?php
$m = ['labas', 'rytAS', '.kaunas#', 'jonas jonAITIS'];
function mazosios ($s){
    $x = strtolower($s);
    $x = rtrim (ltrim($x, '.'), '#'); //ltrim istrina nereikalingus simbolius, rtrim is sonu

    return $x;
}
$nm = [];
$nmd = [];
$nmp = [];
$nml = [];
$nmx = [];
$nms = [];

for ($i =0; $i <count ($m); $i++) {
    $s = mazosios($m[$i]);
   $nm [] = ucfirst($s);
    $nm [] = ucwords($s);
    $nmd [] = strtoupper($s);
    $nmp [] = str_replace ('a', '*', $s); //str funkcija pakeisti i kita simboli
    $nml [] = $s . '-' . strlen($s);
    $nmx [] = $s . '-' . strpos($s,'a');  //kelintoj pozicijoj ieskoma raide, pozicija skaiciuojasi nuo 0
    $nms [] = str_shuffle($s); //sumaiso raides

}
echo json_encode($nm) . '<br>';
echo json_encode($nmd) . '<br>';
echo json_encode($nmp) . '<br>';
echo json_encode ($nml) . '<br>';
echo json_encode ($nmx) . '<br>';
echo json_encode ($nms) . '<br>';