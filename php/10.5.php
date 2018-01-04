<?php
/**
Sukurkite PHP skriptą, kuriame aprašykime klasę rndList, kurioje būtų viena savybė ‐ $numbers, kuri bus masyvas,
 * taip pat būtų metodas generate(), kuris sugeneruoja atsitiktini skaičių ir padeda į masyvą sąvybę $numbers.
 * Taip pat sukurkite metodą list(), kuris surikiuoja masyve esančius skaičius ir išveda juos su echo atskiriant
 * vieną nuo kito tarpais.

 */

class rndList
{
    public $numbers = [];

    function generate()
    {
        $numb = rand(0, 20);
        $this->numbers[] = $numb;
    }

    function listas(){
        sort($this->numbers);
        for ($i = 0; $i<count($this->numbers); $i++){
            echo $this->numbers[$i] . ' ';

        }
    }
}

$objektas = new rndList();
$objektas->generate();
$objektas->generate();
$objektas->generate();
echo $objektas->listas();
