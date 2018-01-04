<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “universitetas”, kuri turi savybes ‐ pavadinimas, miestas, studentai.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, miestas, studentai ‐
 * perduotus parametrus padėtų į savo savybes.
 */

class universitetas {
    public $pavadinimas;
    public $miestas;
    public $studentai;

    function __construct($pa, $m, $stud){
        $this->pavadinimas=$pa;
        $this->miestas=$m;
        $this->studentai=$stud;
    }
}
$m = new universitetas ('VDU', 'Kaunas', 15);
var_export ($m);
echo '<br>';

/**
 * Panaudodami prieš tai sukurtą klasę universitetas, sukurkite klases ktu ir vu, kurios paveldi universitetas klasę.
 * universitetas klasę papildykite metodu “info”, kuris išvestų suformatuotą eilutę “pavadinimas, miestais, studentai”.
 * ktu klasėje perrašykite metodą info, pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (KTU)”.
 * KTU ‐ tiesiog paprastas žodis. vu klasėje perrašykite metodą info,
 * pakeisdami išvedamą eilutę į “pavadinimas, miestais, studentai (VU)”. VU ‐ tiesiog paprastas žodis.
 * Patikrinkite visų trijų klasių metodo “info” veikimą.
 */


function info ()
{
    $sablonas = "Pavadinimas: %s,  miestas: %s, studentai: %s";
    echo sprintf($sablonas, $this->pavadinimas, $this->miestas, $this->studentai);
}

class KTU extends universitetas {
function info (){
    $sablonas = "Pavadinimas: %s,  miestas: %s, studentai (KTU): %s";
    echo sprintf($sablonas, $this->pavadinimas, $this->miestas, $this->studentai);
}

}

$m = new KTU ('Psichologija', 'Kaunas', 23);
echo $m->info() . '<br>';

class VU extends universitetas {
    function info (){
        $sablonas = "Pavadinimas: %s,  miestas: %s, studentai (VU): %s";
        echo sprintf($sablonas, $this->pavadinimas, $this->miestas, $this->studentai);
    }

}

$m = new VU ('Vadyba', 'Kaunas', 12);
echo $m->info() . '<br>';