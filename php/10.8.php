<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę numberList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas,
 * taip pat būtų metodas add($number), kuris prideda naują skaičių į masyvą sąvybę $numbers.
 * Sukurkite metodą delMin(), kuris pašalina mažiausią masyve sąvybėje esantį skaičių.
 * sukurkite funkciją getInfo(), kuris išveda skaičius esančius savybėje.

 */

class numberList
{
    public $numbers;

    function add($number)
    {
        if (isset($this->numbers)) $this->numbers = [];
        $this->numbers [] = $number; //patalpinam i masyva skaiciu
    }

    function delMin(){

        for ($i = 0; $i < count($this->numbers); $i++) {
            if (isset ($d)) {
                if ($this->numbers [$i] < $d && $this->numbers [$i] > 0) $d = $this->numbers [$i];
            } else  $d = $this->numbers [$i];
        }
        return $d;
    }

function getInfo (){
foreach ($this->numbers as $gal){
    echo $gal;

}
}}

$a = new numberList ();
$a->add (2,8,12,13,22);
$a->getInfo();


//array_splice panaikina elementa ir sutraukia masyva