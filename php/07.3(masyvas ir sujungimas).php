<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių.
 * Suskaidykite tekstą į žodžius ir sukelkite į masyvą. Panaudodami for ciklą ‐ pakeiskite visus masyvo elementus
 * ‐ paversdami tekstą mažosiomis raidėmis, pirmą raidę - didžiąja. Sujunkite visus masyvo elementus į vieną teksto
 * eilutę sujungdami juos vertikaliais '|' brūšniais.

 */

$s= "LABAS RYTAS TOMAI";
$e = explode( ' ', $s);

for ($i=0; $i<count($e); $i++ ){
    $e[$i] = ucfirst(strtolower($e[$i]));

}
var_export ($e);
echo '<br>';

$x= implode ('|' , $e);

echo $x;