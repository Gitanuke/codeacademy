<?php
//galima duodant uzklausa perduoti ir parametrus, kai is formos turint kazkoki filtra, kazkokius id,
$cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
$kaina = 3000; //parametras kaina
//taikinys nulauzimui istatant specialu teksta vietoje $kaina - nenaudoti
$res = $cnn->query ("select aut_gamintojas from auto where aut_kaina>{$kaina}");
while ($a = $res->fetch ()){
    echo $a['aut_gamintojas'] . '<br>';
}

//su apsauga nuo isilauzimo

$res = $cnn->prepare ("select aut_gamintojas from auto where aut_kaina>:kaina"); //parametrai serveryje
$x = $res->execute([':kaina' =>$kaina]);//perduodam parametrus, kuriuos numatem, kaina siuo atveju
while ($a = $res->fetch ()) {
    echo $a['aut_gamintojas'] . '<br>';
}