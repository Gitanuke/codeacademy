<?php
//klase yra brezinys, programos kodas, o objektas yra tas egzempliorius, objektus galima kurti ir su klasem.
// objekta galima pasidaryti is asociatyvinio masyvo, keiciant jo tipa, visi raktai tampa savybemis,
//
class zmogus { //vardinama kaip kintamieji, isvardijam savybes su public, kai priskyreme patys
   public $vardas;
   public $pavarde;
   public $gdata;
    function info() {
        $this -> vardas = 'Andrius';  //kai sukuriat egzemplioriu, this yra visos klases  kontekstas, kreipiamasi i kintamaji,
        $this -> pavarde = 'Andriukaitis';// kuris paskirtas, atlieka savybes vaidmeni, is funkcijos vidaus galima prieiti prie tu savybiu
        $this -> gdata = '1990-12-10'; //si funkcija yra klases viduje  klase vadinama template
        $s = 'Vardas: %s, pavarde: %s, gimimo data:%s';
        return sprintf($s,$this->vardas, $this->pavarde, $this->gdata);
    }

}

$zm = new zmogus ();//ziuri klases, pagal ta klase kuria objekta
    echo $zm->info() . '<br>'; //galima prieiti ne tik prie funkcijos, bet ir prie savybes
    echo $zm->vardas . '<br>'; //nuskaitome savybe
$zm->vardas='Tomas'; //pakeiciama savybe
echo $zm->vardas . '<br>'; //nuskaitoma pakeista savybe
echo $zm->info() . '<br>';


class darbuotojas { //vardinama kaip kintamieji, isvardijam savybes su public, kai priskyreme patys
    public $vardas = 'nezinomas';
    public $pavarde = 'nezinoma';
    public $atlyginimas = 0;
    function info() {
        $s = 'Vardas: %s, pavarde: %s, atlyginimas:%s EUR';
        return sprintf($s,$this->vardas, $this->pavarde, $this->atlyginimas);
    }

}

$db = new darbuotojas ();//ziuri klases, pagal ta klase kuria objekta,
echo $db->info() . '<br>'; //galima prieiti ne tik prie funkcijos, bet ir prie savybes
$db->vardas='Jonas';
echo $db->info() . '<br>';
$db->pavarde='Jonaitis';
$db->atlyginimas=1000;
echo $db->info() . '<br>';
var_dump($db); //teisingiau rodo vardump
var_export($db) . '<br>';
echo json_encode($db); //json objektas skliaudzziamass figuriniai savybes , reiksmes atskiriamos per ;

//unset ($db); panaikina klases egzemplioriu
//echo $db-> info();  meta klaida
