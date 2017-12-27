<?php
$myfile = fopen("failas.txt", "w"); //fopen sukure faila txt
$txt = "labas rytas"; //r skaitymui, w rasymui
fwrite($myfile, $txt);
fclose($myfile);
echo 'irasyta<br>';

$f = fopen("failai2.txt", "a"); //fopen sukure faila txt
$txt = "2000"; //r skaitymui, w rasymui
fwrite($f, $txt);
fclose($f);
echo 'papildyta<br>';

if (!file_exists('failai2')) mkdir ('failai2');
rmdir ('failai2');
echo 'pdiras pasalintas<br>';


copy ('failas.txt', 'failai/failas.txt');
echo 'failas nukopijuotas<br>';

unlink ('failai/failas.txt');
echo 'failas nukopijuotas<br>';

$a = scandir('.'); //nukopijuoja visa direktorija  . simbolizuoja esama dira
//var_export ($a);
foreach ($a as $fn){
    echo $fn . '<br>'; //graziai visas direktorija isskleidzia , skaiciai progrmaoj veikia zymiai greiciau

}