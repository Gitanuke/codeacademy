<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

echo 'labas'; //komentaras
/*komentaras
komentas
*/

//kintamieji
$a = 5; //skaicius
$af = 5.6; //float
$af = 3.1e-3; //float
$b = true; //boolean loginis
$c = "abc"; //string
$d = ['bmw', 'honda']; //masyvas
$e = new stdClass(); //objektas
$f = NULL; //nieko

function pvz_static (){
    static $a =0; //sukurimas su pradine reiksme
    $a++; // +1
    echo $a .'<br>' ; //parodymas
}
pvz_static (); // sukuriamas $a; + 1, ir parodoma
pvz_static (); // +1, parodomas
pvz_static (); // +1, parodomas

$g = "labas";
function pvz_local (){
$g = "rytas";
echo $g. "<br>";
}

pvz_local (); //bus klaida

global $h;
$h = "labas";
function pvz_global (){
    global $h;
    echo $h . "<br>";
}

pvz_global ();
echo $GLOBALS ['h'] . "<br>";

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER ['HTTP_HOST'] . "<br>;

define ('konst', 'labas'); //konstante
echo konst . "<br>";

//const konst = 'labas' ; //sintakse klaseje

?>
</body>
</html>