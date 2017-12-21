<?php
class zmogus {
    public $vardas;
    public $pavarde;
    public $amzius;
    function __construct ($v, $p, $a){
        $this->vardas= $v;
        $this->pavarde = $p;
        $this->amzius = $a;
    }
    static function keisti($s){ //nurodant klase galima issikviesti, jeigu naudiojamae toje pacioje klase, nebutina rasytia klases pavadinima, gali rasyt self
        return ucfirst(strtolower($s));
    }
    function keisti2($s) {
        return zmogus::keisti($s);
    }
}

class mokinys extends zmogus {
    function keisti2($s) {
        return strtoupper($s) . ' ' . parent::keisti2($s);
    }
}

echo zmogus::keisti ('tOmas ') . '<br>';
//echo zmogus::keisti2 ('tOmas ') . '<br>'; KLAIDA
$z = new zmogus ('jonas', 'jonaitis', 25);
echo $z->keisti2('tomas') . '<br>';
$m = new mokinys( ' antanas', 'jonaitis', 25);
echo $m->keisti2('tomas') . '<br>';