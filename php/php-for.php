<?php
$masyvas = ['bmw', 'audi', 'honda', 'jaguar'];
for ($i = 0; $i<count ($masyvas); $i++) {
    $masina = $masyvas[$i];
    echo ($i + 1) . '. ' . $masina . '<br>';

}
$i = 1;
foreach($masyvas as $masina) {
    echo ($i++) . '. ' . $masina . '<br>';
}
