<?php
//Sukurti klase turgus. sukurti funkcija automobilis, su kuria butu galima pateikti auto i turgu .funkcijos parametrai:
// gamintojas, modelis, metai, kaina.
//automobilis info talpinti i klases savybiu automobiliai(masyvas) sukurti funkcija minkaina, kuri surastu auto su maziausia kaina
class turgus {
   public $automobiliai;
function automobilis ($gamintojas,$modelis,$kaina,$metai) {
    if (!isset($this->automobiliai)) $this->automobiliai = [];
    $this->automobiliai[]= [
        'ga' =>$gamintojas,
        'mo' =>$modelis,
        'ka' =>$kaina,
        'me' =>$metai
    ];
}

    function minkaina(){
    $min = $this->automobiliai[0]['ka'];
        for ($i=0; $i<count($this->automobiliai); $i++){
            if ($this->automobiliai[$i]['ka'] < $min) $min = $this->automobiliai[$i]['ka'];
        }
        return $min;
    }
}
$objektas = new turgus();
$objektas->automobilis ('bmw', '320i', '2000', '2005');
$objektas->automobilis('audi', '100', '1000', '1990');
$objektas->automobilis('infinity', 'fx37', '1500', '2009');
$objektas->automobilis ('mitsubishi', 'grandis', '2000', '2005');


echo $objektas->minkaina();
?>




}






}