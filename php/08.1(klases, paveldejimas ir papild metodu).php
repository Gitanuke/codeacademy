<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “automobilis”, kuri turi savybes ‐ gamintojas, modelis, metai.
 Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ gamintojas, modelis, metai ‐
perduotus parametrus padėtų į savo savybes.
*/
class automobilis {
    public $gamintojas;
    public $modelis;
    public $metai;

    function __construct($g, $mo, $me){
        $this->gamintojas = $g;
        $this->modelis = $mo;
        $this->metai = $me;
    }

    function Duomenys(){
        $sablonas = "%s %s %s";
        echo sprintf($sablonas, $this->gamintojas, $this->modelis, $this->metai);

    }
}

/*
Panaudodami prieš tai sukurtą klasę automobilis, sukurkite klases lengvasis ir krovininis, kurios paveldi automobilis klasę.
automobilis klasę papildykite metodu “duomenys”, kuris išvestų suformatuotą eilutę “gamintojas - modelis - metai”.
lengvasis klasėje perrašykite metodą duomenys, pakeisdami išvedamą eilutę į “gamintojas, modelis, metai (lengvasis automobilis)”.
lengvasis automobilis ‐ tiesiog paprastas žodis.
*/

function Duomenys(){
    $sablonas = "Gamintojas:%s, modelis: %s, metai: %s";
    echo sprintf($sablonas, $this->gamintojas, $this->modelis, $this->metai);

}


class lengvasis extends automobilis {
    function Duomenys(){
$sablonas = "Gamintojas:%s, modelis: %s, metai: %s";
echo sprintf($sablonas, $this->gamintojas, $this->modelis, $this->metai);   //isvedam su echo, grazina return
}
}
$m = new lengvasis ('bmw', '320i', 2005);
echo $m->Duomenys() . '<br>';

class krovininis extends automobilis {
}


$m = new lengvasis ('infinity', 'g37', 2009);
echo $m->Duomenys();
echo '<br>';
$m = new krovininis ('maz', 'g5', 2005);
echo $m->Duomenys();

