<?php
function masina ($a, $b, $c){
    return [
        "gamintojas" => ucfirst (strtolower($a)),
        "modelis" => ucfirst (strtolower($b)),
        "metai" => ($c),
    ];
}
// masyvas
$m [0] = masina ("bmw", "320i", "2010");
$m [1] = masina ( "infinity", "fx37", "2009");
$m [2] = masina ("mitsubishi", "grandis", "2005");

//isrikiavimas
ksort ($m);

// funcijos isvedimas
function isvedimas ($m){
    $gamintojas = $m["gamintojas"];
    $modelis = $m["modelis"];
    $metai = $m["metai"];

    return "<tr><td>".$gamintojas."</td><td>".$modelis."</td><td>".$metai."</td></tr>";

}

//lentele

echo "<table>";
echo "<th>Gamintojas</th><th>Modelis</th><th>Metai</th>";
for ($i=0; $i< count ($m); $i++) echo isvedimas ($m[$i]);
echo "<table>";


//1.sveciu sarasas :vardas, pavarde, maistas
//2.bendras masyvas asociatyvinis
//3.surusiuoti
//4.isvedimas html eilute, darysim su "for each"
//5.html faile darysim su php