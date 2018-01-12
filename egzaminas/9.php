<?php
class person
{
    public $name;
    public $surname;
    public $age;

    function __construct($n, $s, $a)
    {
        $this->name = $n;
        $this->surname = $s;
        $this->age = $a;
    }

    function asmensDuomenys()
    {
        $sablonas = "Vardas:%s, pavardė:%s, amžius:(%s)";
        echo sprintf($sablonas, $this->name, $this->surname, $this->age);
    }
}
class staff extends person {
    function asmensDuomenys(){
        $sablonas = "Pavardė:%s, vardas (darbuotojas): %s, amzius: (%s)";
        echo sprintf($sablonas, $this->surname, $this->name, $this->age);
    }
}
class client extends person {
}

$p= new person ('Elena', 'Elenyte', 29);
$p->asmensDuomenys();
echo '<br>';
$p = new staff('Aurimas', 'Aurimaitis', 20);
$p->asmensDuomenys();
echo '<br>';
$p = new client('Ona', 'Onyte', 30);
$p->asmensDuomenys();