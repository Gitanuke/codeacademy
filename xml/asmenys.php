<?php

$s = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>';
<table>
<row>
<vardas>Jonas</vardas>
<pavarde>Jonaitis</pavarde>
<metai>88</metai>
</row>
<row>
<vardas>Petras</vardas>
<pavarde>Petraitis</pavarde>
<metai>58</metai>
</row>
<row>
<vardas>Auris</vardas>
<pavarde>Aurutis</pavarde>
<metai>8</metai>
</row>
</table>
EOT;
$xml = simplexml_load_string(htmlspecialchars_decode($s));
$result = $xml->xpath("row");
echo '<table>';
foreach($result as $rec){
echo '<tr>';
echo '<td>' . (string)$rec->vardas . '</td>';
echo '<td>' . trim($rec->pavarde) . '</td>';
echo '<td>' . trim($rec->metai) . '</td>';
echo '</tr>';
}
echo '</table>';

$f= fopen('asmenys.xml')
