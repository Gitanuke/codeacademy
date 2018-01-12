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
}
$a= new person ('Elena', 'Elenyte', 29);
var_dump ($a);