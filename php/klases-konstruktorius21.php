<?php
class darbuotojas {
    public $vardas;
    public $pavarde;
    public $atlyginimas;
    function __construct ($vard, $pav, $atl) {  //vieta KONSTRUKTORIUI nesvarbi klases apprasymui,(parametrai nurodyti sito konstruktoriaus) conbstruct yra funkcija, gali ir sutapti funkcijos kur virdsuj surasytos
       $this -> vardas = $vard;
       $this -> pavarde = $pav;
       $this-> atlyginimas = $atl;

}
    function info() {
        $s = 'Vardas: %s, pavarde: %s, atlyginimas:%s EUR';
        return sprintf($s,$this->vardas, $this->pavarde, $this->atlyginimas);
    }
function vardas_pavarde ($skyriklis){ //i klase galima ideti ne viena funkcija, galima kiek norim
        return $this->vardas . $skyriklis . $this->pavarde;

}
}

$d = new darbuotojas ('Jonas', 'Jonaitis', 1500);  //new pasiziureti i klases aprasyma, kai new parasome,

echo $d->info() . '<br>';
echo $d->vardas_pavarde (' ') . '<br>';
echo $d->vardas_pavarde (' * ') . '<br>';