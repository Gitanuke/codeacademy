<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas masyvas, aprašantis tris codeAcademy kursus,
 * kurių kiekvienas yra aprašytas asociatyviniu masyvu naudojant raktus. Asociatyviniuose  masyvuose
 * turi būti laukeliai: kurso pavadinimas, mokinių skaičius, kursų pradžios data.
 */


$m = [
    ['kursopavadinimas'=>'Frontend', 'mokiniuskaicius'=>55, 'kursu-pradžios-data'=>2007],
    ['kursopavadinimas'=>'Backend', 'mokiniuskaicius'=>22, 'kursu-pradžios-data'=>2018],
    ['kursopavadinimas'=>'Svetainių-dizainas', 'mokiniuskaicius'=>12, 'kursu-pradžios-data'=>2018],

];

var_dump($m);