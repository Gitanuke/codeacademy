<?php
include "class/serviso-klase.php";
include "class/automobiliu-klase.php";

$automobilis = [];
$automobilis [] = new servisas ('bmw', '320i', '2010');
$automobilis [] = new servisas ('infinity', 'fx37', '2009');
$automobilis [] = new servisas  ('mitsubishi', 'grandis', '2004');


foreach($automobilis as $sv){
    echo $sv->info() . '<br>';
}
