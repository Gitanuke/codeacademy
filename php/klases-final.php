<?php
class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

$a=new BaseClass();
$a->test();

//final klases uzdejimo esme,jos paveldet neglaima (extends), naudoti galima

class OtherClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class ChildClass extends OtherClass { //klaida nes yra final funkcija, si funkcija gali but nereikalinga, nebent didelem programom


    public function moreTesting (){
        echo 'labas';

}

}