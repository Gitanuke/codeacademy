<?php
/**
Sukurkite php skripta, kuriame butu aprasyta klase 'person' kuri turi savybes -name, surname, age.
 * Sukurkite standartines klases __construct metoda,
 * kuriam perdavus tris parametrus - name, surname ir age - perduotus parametrus padetu i savo savybes.
 */

class person {
    public $name;
    public $surname;
    public $age;

    function __construct($n, $s, $a){
        $this->name = $n;
        $this->surname = $s;
        $this->age = $a;
    }
}
$mo = new person ('Petras', 'Petraitis', 17);
var_dump($mo);


/*
 * panaudodami pries tai sukurta klase person , sukurkite klases staff ir client, kurias paveldi preson klase. Person klase papildykite
 *  metodu 'asmensduomenys" kurios isvestu suformuota eilute "Vardas Pavarde amzius". Staff klaseje perrasykite metoda asmensduomenys
 * , pakeisdami isvedama eilute i "Pavarde Vardas darbuotojas" darbuotojas =tiesiog paprastas zodis.
 */

