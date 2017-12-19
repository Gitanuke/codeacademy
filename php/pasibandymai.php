<?php
$m = [1,3,15,6,8]; //masyvo elementu sumos kvadratine saknis
function suma ($mas) {
    $sum = 0;
    for ($i=0; $i<count($mas); $i++) $sum += sqrt ($mas[$i]);
    return $sum ;

}
echo suma ($m) . '<br>';

$m2 = ['tadas', 'izabele', 'herkus']; // padaryti tekstuose a)mazasias b)pirma raide-didzioji c) grazinti pakeista masyva 3.ivesti echo json_encode
function pakeitimas ($s)
{
    $x = strtolower($s);
    return $x;
}
    $nml = [];
    $nm = [];

    for ($i = 0; $i < count($m2); $i++) {
        $s = pakeitimas ($m2[$i]);
        $nml [] = strtolower($s);
        $nm [] = ucfirst($s);

    }

echo json_encode ($nml) . '<br>';
echo json_encode($nm) . '<br>';
echo json_encode ($m2) . '<br>';


$m3 = ['labas', 'ruta', 'ajus']; //permaisyti elementus atsitiktine tvarka, sujungti elementus, grazinti reiksme
function sumaisyti ($d)
{
    for ($i = 0; $i < count($m3); $i++) {
        $d = sumaisyti ($m3[$i]);
        $nms [] = str_shuffle($d); //sumaiso raides
        $nm4 [] = implode($d); //sujungias elementus
        $nms = [];
        $nm4 = [];
    }
}
    echo json_encode ($nms) . '<br>';
    echo json_encode($nm4) . '<br>';
