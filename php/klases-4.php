<?php
session_start();
include "class/asmuo.php"; // tik masyva turint galima rusiuoti, objekto savybes nesirusiuoja!!
include "class/svecias.php";
$asmuo = new asmuo ('jonas', 'jonaitis', 20);
var_dump ($asmuo);
$svecias = new svecias ('jonas', 'jonaitis', 20, 'mesa');
var_dump ($svecias);
echo json_encode($svecias) . '<br>';
echo serialize($svecias) . '<br>'; //objekto surinkimas ir sudeliojimas tekstinej formoj , jeigu norima saugoti sesijoje, faile, lb gera funkcija, pagaminti tekstini faiala is objekto
$x = serialize ($svecias) . '<br>'; //x daro teksta
$y = unserialize($x); //is teksto i objekta
$_SESSION['asmuo'] = $x;

var_dump($y);

if (isset ($_SESSION['cnt'])) { //visalaik prasideda nuo 0 isjungus narsykle
    $cnt = $_SESSION ['cnt'];
    $cnt++;
    $_SESSION ['cnt'] = $cnt;
    //$session ['cnt']++
}else  $_SESSION['cnt'] = 1;
echo 'cnt: ' . $_SESSION ['cnt'] .'<br>';
