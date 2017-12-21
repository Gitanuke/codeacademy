<?php
class zmogus {
    const copy = 'CodeAcademy';
    public $vardas;
    public $pavarde;
    public $amzius;
    private $sablonas = 'Vardas: %s, pavarde: %s, amzius:%s';
    function __construct($v, $p, $a= 'nezinomas'){
        $this->vardas = $this->pakeisti ($v);
        $this->pavarde = $this->pakeisti ($p);
        $this->amzius = $a;
    }
    protected function pakeisti ($s){
        return ucfirst (strtolower($s));

    }
    public function eilute(){
        return  zmogus::copy . ': ' . sprintf($this->sablonas, $this->vardas, $this->pavarde, $this->amzius);

    }
}
$z = new zmogus ('jonas', 'jonaitis', 25);
echo $z->vardas . '<br>';
//echo $z->sablonas . '<br>'; //kas yra private tik viduje funkcijos naudojami, kai susikurus objekta mes isoreje negalim pasiekti, public apsaugojami duomenys
echo $z->eilute() . '<br>';
define ('aaa', 'labas'); //aa konstantes pavadinimas, labas yra ta reikme priskiriama tai konstantei
echo aaa . '<br>';
echo zmogus:: copy . '<br>';

class mokinys extends zmogus { //paveldejimas su extends, negalima kreiptiss i private ir paveldejimo funkcijoj
    public $pazymys;
    function __construct ($v, $p, $a, $pa) {
        $this->vardas =$this ->pakeisti ($v);
        $this->pavarde = $this->pakeisti ($p);
        $this->amzius = $a;
        $this->pazymys = $pa;

    }
}
$mo = new mokinys ('Petras', 'Petraitis', 17, 10);
var_dump($mo);
echo mokinys::copy . '<br>';
echo $mo -> eilute () . '<br>';
?>