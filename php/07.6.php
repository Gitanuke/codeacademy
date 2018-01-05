<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis skaičių masyvas.
 * Masyvo kas antro elemento reikšmę cikle programiškai pakeiskite į 0.

 */

$m2= [5,7,12,9,15,24];

    for ($i =0; $i <count ($m2); $i++) {
        if ($i%2 !=0)

        $m2[$i]=0;

        var_dump($m2);

}

