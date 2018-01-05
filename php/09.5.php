<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “dviratis”, kuri turi savybes ‐ pavadinimas, kaina.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus du parametrus ‐ pavadinimas,
 * kaina ‐ perduotus parametrus padėtų į savo savybes.
 *
 * Panaudodami prieš tai sukurtą klasę dviratis,
 * sukurkite klases moteriskas ir vyriskas, kurios paveldi dviratis klasę. dviratis klasę papildykite metodu “info”,
 * kuris išvestų suformatuotą eilutę “pavadinimas, kaina”. moteriskas klasėje perrašykite metodą info, pakeisdami
 * išvedamą eilutę į “pavadinimas, kaina: moteriskas”. moteriskas ‐ tiesiog paprastas žodis. vyriskas klasėje perrašykite
 * metodą info, pakeisdami išvedamą eilutę į “pavadinimas, kaina: vyriskas”. vyriskas ‐ tiesiog paprastas žodis.
 * Patkrinkite visų trijų klasių metodo “info” veikimą.
 *

 */

class dviratis{
    public $pavadinimas;
    public $kaina;

    function __construct($pa, $k){
        $this->pavadinimas = $pa;
        $this->kaina = $k;
    }

    function info(){
        $sablonas = "Pavadinimas: %s,  kaina: %s";
        echo sprintf($sablonas, $this->pavadinimas, $this->kaina);
    }
}
$m = new dviratis ('Judeja', 1500);
echo $m->info () . '<br>';

class moteriskas extends dviratis {
    function info (){
        $sablonas = "Pavadinimas: %s,  kaina(moteriskas): %s";
        echo sprintf($sablonas, $this->pavadinimas, $this->kaina);
    }

}

$m = new moteriskas ('Gineira', 800);
echo $m->info() . '<br>';

class vyriskas extends dviratis {
    function info (){
        $sablonas = "Pavadinimas: %s,  kaina(vyriskas): %s";
        echo sprintf($sablonas, $this->pavadinimas, $this->kaina);
    }

}

$m = new vyriskas ('Juts', 1100);
echo $m->info() . '<br>';