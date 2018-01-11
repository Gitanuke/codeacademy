<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “salis”,
kuri turi savybes ‐ pavadinimas, sostine, gyventojai. Sukurkite standartinį klasės __construct metodą,
kuriam perdavus tris parametrus ‐ pavadinimas, sostine, gyventojai ‐ perduotus parametrus padėtų į savo savybes.
*/

class salis
{
    public $pav_salies;
    public $sostine;
    public $gyventojai;

    function __construct($s, $sost, $gyv)
    {
        $this->pav_salies = $s;
        $this->sostine = $sost;
        $this->gyventojai = $gyv;
    }


    /*
    Panaudodami prieš tai sukurtą klasę salis, sukurkite klases vakaru_salis ir rytu_salis,
     kurios paveldi salis klasę. Salis klasę papildykite metodu “informacija”,
    kuris išvestų suformatuotą eilutę “šalis, sostinė, gyventojai”.
    rytu_salis klasėje perrašykite metodą informacija, pakeisdami išvedamą eilutę į “šalis, sostinė, gyventojai (Rytų šalis)”.
    Rytų šalis ‐ tiesiog paprastas tekstas.
    */

    function informacija()
    {
        $s = "%s - %s - %s";
        echo sprintf($s, $this->pav_salies, $this->sostine, $this->gyventojai);

    }
}
class rytu_salis extends salis {
    function informacija (){
        $s = "%s - %s (rytų šalis) %s ";
        echo sprintf($s, $this->pav_salies, $this->sostine, $this->gyventojai);
    }
}
class vakaru_salis extends salis {
}

$a = new salis('Lenkija', 'Varšuva', '37,95milijonų');
$a->informacija();
echo "<br>";
$a = new rytu_salis('Ukraina', 'Kijevas', '45 milijonai ');
$a->informacija();
echo "<br>";
$a = new vakaru_salis ('Vokietija', 'Berlynas', '82,67 milijonų');
$a->informacija();



