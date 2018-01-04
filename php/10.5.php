<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę rndList, kurioje būtų viena savybė ‐ $numbers,
kuri bus masyvas, taip pat būtų metodas generate(), kuris sugeneruoja atsitiktini skaičių ir padeda į masyvą sąvybę $numbers.
 Taip pat sukurkite metodą list(), kuris surikiuoja masyve esančius skaičius ir išveda juos su echo atskiriant vieną nuo kito tarpais.
*/
class rndList {
    public $numbers = [];
    function generate(){
        $this->numbers[] = rand(1,75);
    }
    function listNumbers(){
        foreach($this->numbers as $number){
            echo $number . ' ';
        }
    }
}
$a = new rndList();
$a->generate();
$a->generate();
$a->generate();
$a->generate();
$a->generate();
$a->listNumbers();