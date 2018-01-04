<?php
$xml = simplexml_load_file('automobiliai.xml');
$result = $xml->xpath('row'); //
echo '<table>';
foreach ($result as $rec) {
    echo '<tr>';
    echo '<td>' . trim($rec->gamintojas) . '</td>';
    echo '<td>' . trim($rec->modelis) . '</td>';
    echo '<td>' . trim($rec->metai) . '</td>'; //pavercia objekta i string
    echo '</tr>';
}

echo '</table>';

$result = $xtml->xpatch ('')