<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris automobilius,
 * kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus.
 Asociatyviniuose  masyvuose turi būti laukeliai: gamintojas, modelis, pagaminimo metai, galingumas.
 */

$m = [
    ['gamintojas'=>'bmw', 'modelis'=>'320i', 'pagmetai'=>'2005', 'galingumas'=>'140'],
    ['gamintojas'=>'audi', 'modelis'=>'r8', 'pagmetai'=>'2010', 'galingumas'=>'160'],
    ['gamintojas'=>'infinity', 'modelis'=>'g37', 'pagmetai'=>'2009', 'galingumas'=>'150'],

];

var_dump($m);