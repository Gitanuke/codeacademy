<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę textList,
 * kurioje būtų viena savybė ‐ $texts, kuri bus masyvas,
 * taip pat būtų metodas add($text), kuris prideda naują tekstą į masyvą sąvybę $texts.
 * Taip pat sukurkite metodą symbols(), kuris grąžintų masyve sąvybėje esančių elementų simbolių skaičių

 */

class textList{
    public $texts;
    function add ($text){
        if (!isset($this->texts)) $this->texts = []; // jeigu savybė dar nėra naudota, tai įrašyti į ją tuščia paprastą masyvą
        $this->texts [] = $text; // patalpinti į savybę (masyvą) teksta
    }

        function symbols (){
        $sum=0;
            for ($i=0; $i<count($this->texts); $i++){
                $sum += strlen($this->texts[$i]);
            }
            return $sum;

        }

    }

$objektas = new textList(); // sukuriame klasės objekto egzempliorių
$objektas->add('ona'); // įdedame teksta
$objektas->add('petras');
$objektas->add('jonas');
echo $objektas->symbols();



