<?php
/**
Sukurkite php skripta, kuriame butu aprasytas vienmatis masyvas is 5 elementu - teksto eiluciu.
 * panaudodami foreach cikla -pakeiskite visus masyvo elementus didziosiomis raidemis.
 */

$m = ['Jonas', 'Petras', 'Kazimieras', 'Joana', 'Herkus'];
$i=0;
foreach ($m as $sv){
    $m[$i++]= strtoupper($sv) ;
}
var_dump($m);


/*sm=['a'=>1, 'b'=>2]
foreach ($sm as $key => $value)
*/
/*
Sukurkite php skripta, kuriame butu aprasytas asociatybini masyvas is 5 elementu - teksto eiluciu.
 * panaudodami foreach cikla -pakeiskite visus masyvo elementus mazosiomis raidemis, o pirmaja raide didziaja

/*
 *
 */
$m2 = ['Vardas'=>'elena', 'pavarde'=>'elenyte', 'maistas'=>'mesa', 'issilavinimas'=>'vidurinis', 'padetis'=>'istekejusi'];

foreach ($m2 as $key =>$value){
    $m2[$key] = ucfirst(strtoupper($value));
}
var_dump($m2);
