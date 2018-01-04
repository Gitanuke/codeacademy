<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašytas tekstas sudarytas iš žodžių.
 * Suskaidykite tekstą į žodžius ir sukelkite į masyvą.
 * Panaudodami while ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą didžiosiomis raidemis,
 * gale teksto prijunkite taško simbolį '.'. Sujunkite visus masyvo elementus į vieną teksto eilutę sujungdami
 * juos kableliais ','.

 */


$s = "Labas rytas brangieji";
$m = explode(' ', $s);
$i=0;
while ($i<count($m)){
    echo  strtoupper($m[$i]) . '.' . ',';
    $i++;
}
echo '<br>';

//$x = implode(',', $m);
//echo $x;
