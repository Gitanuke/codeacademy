<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Title</title>
</head>
<body>
<?php
function svecias ($vardas, $pavarde, $maistas){
    return [
        "vardas" => ucfirst (strtolower($vardas)),
        "pavarde" => ucfirst (strtolower($pavarde)),
        "maistas" =>  ucfirst (strtolower($maistas)),
    ];
}

  // masyvas
$m [0] = svecias ("Aura", "auryte", "salotos");


print_r ($m[0]);

//strtolower($vardas) . strtolower($pavarde)
$sveciai = [];

$m = svecias ("Aura", "auryte", "salotos");
$raktas = strtolower($m['vardas']) . strtolower($m['pavarde']);
$sveciai[$raktas] = $m;
$m = svecias ("Elena", "elenyte", "steikas");
$raktas = strtolower($m['vardas']) . strtolower($m['pavarde']);
$sveciai[$raktas] = $m;
$m = svecias ("Jonas", "Jonaitis", "zuvis");
$raktas = strtolower($m['vardas']) . strtolower($m['pavarde']);
$sveciai[$raktas] = $m;

ksort($sveciai);
function eilute ($svecias) {

    return "<tr><td>".$svecias['vardas']."</td><td>".$svecias['pavarde']."</td><td>".$svecias['maistas']."</td></tr>";

}
?>
<table>
  <?php

  foreach ($sveciai as $m => $m_svecias) {
      echo eilute($m_svecias);
  }
?>
        </table>
</body>
</html>