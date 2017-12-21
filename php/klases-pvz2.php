<?php
class masina{
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct ($gamintojas, $modelis, $metai) {
        $this->gamintojas = ucfirst (strtolower($gamintojas));
        $this->modelis = ucfirst (strtolower($modelis));
        $this->metai = ($metai);
    }
    function eilute (){
      $s = 'gamintojas:%s, modelis:%s, metai:%s';
        return sprintf($s,$this->gamintojas, $this->modelis, $this->metai);
    }
}

$masina = [];
$masina [] = new masina ('bmw', '320i', '2010');
$masina [] = new masina ('infinity', 'fx37', '2009');
$masina [] = new masina ('mitsubishi', 'grandis', '2004');


foreach($masina as $sv){ //kiekviena karta imeta sekancio masyvo veiksma
    echo $sv->eilute() . '<br>';
}

