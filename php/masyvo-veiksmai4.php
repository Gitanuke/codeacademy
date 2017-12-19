<?php

function skaiciuoti ($ma){ //pozicija dauginam is elemento +1 //nevykdo
    $belekas=0;
    for ($a=0; $a < count ($ma); $a++){
        //prasideda vykdymas, kol $a nepasieks max
        $belekas = $belekas + $ma[$a] * ($a +1);
        //baigiasi vykdymas


    }
    return $belekas;

}
$m= [2,5,6];//vykdo

$rezultatas = skaiciuoti ($m); //vykdo
echo skaiciuoti ($m) . '<br>';

