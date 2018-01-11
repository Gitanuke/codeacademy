<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries,
kuri bus masyvas, taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi.
Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį
*/


class countryList {
  public $countries = [];

function insert($country){
    $this->countries [] = $country;
}
function average (){
    $sum = 0;
    $kiek=0;
    for ($i=0; $i<count($this->countries); $i++){
        $kiek++;
        $sum+= strlen($this->countries[$i]);
    }
    return $sum / $kiek ;

}
}

$d= new countryList();
$d->insert ('Lenkija');
$d->insert ('Prancuzija');
$d->insert ('Australija');
echo $d->average ();