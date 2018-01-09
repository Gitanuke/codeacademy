<?php
/**
Sukurkite php skripta, kuriame aprašykite klasę auto, kurioje būtų viena savybė $sarasas __construct metode,
 * irasykite 3 automobiliu duomenis asociatyvinio masyvo formoje. Duomenys: nuotrauka, gamintojas, modelis, metai, kaina, pastabos.
 * Sukurkite metoda getList(), kuris isveda asociatyvinio masyvo duomenis html lentele formoje.
 * Sukurkite egzemplioriu ir ivykdyti funkcija.
 */

class auto{
    public $sarasas= [];
    function __construct(){
        $this->sarasas [] = [
            ['bmw', '320i', 2005],
            ['audi', 'r8', 2008],
            ['infinity', 'g37', 2005],
];
    }

                        function getList(){
                            echo '<table>';
                            for ($i = 0; $i <count($this->sarasas); $i++) {
                                echo '<tr>';
                                for ($j = 0; $j <count($this->sarasas); $j++) {
                                        echo '<td>' . $this->sarasas [$i][$j]. '</td>';
                                }
                                echo '</tr>';
                            }
                            echo '</table>';
                        }
}
$a = new auto();
$a->getList();
