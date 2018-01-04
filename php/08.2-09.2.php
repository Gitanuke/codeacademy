<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “codeAcademy”, kuri turi savybes ‐ data, skaicius, auditorija.
 * Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ data, skaicius,
 * auditorija ‐ perduotus parametrus padėtų į savo savybes.

 */

class codeAcademy
{ // person klasės aprašas
    // klases savybės
    public $data;
    public $skaicius;
    public $auditorija;
    function __construct($da, $sk, $aud){ // klasės konstruktorius, kuri padeda tris parametrus į savo savybes
        $this->data = $da;
        $this->skaicius = $sk;
        $this->auditorija = $aud;
    }
}
$m = new codeAcademy ('2017', 23, '3');
var_export ($m);
echo '<br>';



/**
 * Panaudodami prieš tai sukurtą klasę codeAcademy, sukurkite klases backend ir frontend,
 * kurios paveldi codeAcademy klasę. codeAcademy klasę papildykite metodu “kursas”, kuris išvestų suformatuotą eilutę
 * “data, skaicius, auditorija”. backend klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “data, skaicius,
 * auditorija (backend kursas)”. backend kursas ‐ tiesiog paprastas žodis. frontend klasėje perrašykite metodą duomenys,
 * pakeisdami išvedamą eilutę į “data, skaicius, auditorija (frontend kursas)”. frontend kursas ‐ tiesiog paprastas žodis.
 * Patkrinkite visų trijų klasių metodo “kursas” veikimą.

 */

function kursas ()
{
    $sablonas = "Data: %s, skaicius: %s, auditorija: %s";
    echo sprintf($sablonas, $this->data, $this->skaicius, $this->auditorija);

}

class backend extends codeAcademy {
    function Duomenys(){
        $sablonas = "Data:%s, skaicius: %s, auditorija(backend kursas): %s";
        echo sprintf($sablonas, $this->data, $this->skaicius, $this->auditorija);   //isvedam su echo, grazina return
    }
}
$m = new backend ('2018', 12, 4);
echo $m->Duomenys() . '<br>';

class frontend extends codeAcademy {
    function Duomenys(){
        $sablonas = "Data:%s, skaicius: %s, auditorija(frontend kursas): %s";
        echo sprintf($sablonas, $this->data, $this->skaicius, $this->auditorija);   //isvedam su echo, grazina return
    }
}
$m = new frontend ('2016', 15, 2);
echo $m->Duomenys() . '<br>';