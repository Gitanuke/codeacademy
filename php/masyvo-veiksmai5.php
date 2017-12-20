<?php

$m = ['bmw', 'audi', 'honda'];
$ma = ['bmw'=>'raudona', 'audi'=>'balta', 'honda'=>'juoda']; //asociatyvine-nera poziciju
echo $m[0] . '<br>';
echo $ma ['bmw'] . '<br>';

$mx = ['bmw'=> ['raudona', 'melyna', 'zalia'], 'audi'=>'balta', 'honda'=>'juoda']; //asociatyvine-nera poziciju
echo $mx['bmw'][0] . ' ' . $mx ['bmw'][1] . '<br>';
echo implode (' ', $mx ['bmw']) . '<br>'; //glue tarpas, implode isskiria visus tam raktui priskirtus

$ma ['lada'] = 'geltona'; //pridedam nauja reiksme
echo json_encode($ma) . "<br>";

unset ($ma['bmw']); // unset pasalina
echo json_encode ($ma) . '<br>';

$my = ['bmw'=>'raudona', 'audi'=>'balta', 'honda'=>'juoda'];
sort ($my); //rusiavimas
echo json_encode($my) . '<br>';

$mz = ['bmw'=>'raudona', 'audi'=>'balta', 'honda'=>'juoda'];
ksort ($mz); //surusiuoja pagal raktas abecele
echo json_encode($mz) . '<br>';

$mo = ['bmw'=>'raudona', 'audi'=>'balta', 'honda'=>'juoda'];
krsort ($mo); //surusiuoja is desines
echo json_encode($mo) . '<br>';

$a = ['a', 'x', 'z'];
$b = ['c', 'm'];
$c = array_merge ($a, $b);
print_r($c); //budas isvesti vidiniam formate
sort($c); //surusiavom
print_r ($c); //naudojamos tarpiniui rezultatui, tam momentui imesti, tik derinimui
echo '<br>' . json_encode ($c);

$aa = ['bmw'=>'raudona', 'audi'=>'balta', 'honda'=>'juoda'];
$bb = ['toyota' =>'zalia', 'lada'=>'melyna'];
$cc = array_merge ($aa, $bb);
echo '<br>' . json_encode($cc);
ksort ($cc);
echo '<br>' . json_encode($cc);

function test ($ma, $key){
    if (isset ($ma[$key])) echo '<br> yra' ; else echo '<br>nera';//isset grazina true jei tam masyve pagal rakta yra ta reiksme,
    // o jei nera- grazina false, apsaugine priemone , pasitikrinti ar tas elementas yra masyve
}
test ($cc, 'honda');
test ($cc, 'hyundai');
echo '<br>' . $cc ['honda'] . '<br>';

//sprint s leidzia pasidaryti sablonam, su masyvais nesurista

$s = "Labas %s %s. Sveiki atvyke";
echo sprintf($s, 'jonas', 'jonaitis'); //pridedam kiek yra %s %s , pati paprasciausia funkcija is php
