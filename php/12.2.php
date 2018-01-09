<?php
/*
Sukurkite PHP skriptą, kuris panaudodamas PDO objektą atliktų prisijungimą prie duomenų bazės ir įvykdytų SQL užklausą visų
 * lentelės ‘asmenys’ duomenų apie 3 vyriausius asmenis gavimui. Rezultatus išveskite HTML lentelės forma.
 */

$cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
$sql = "SELECT * FROM asmenys order by asm_gdata ASC limit 0,3";
$res = $cnn->query($sql);
echo '<table>';
echo "<th>Vardas</th><th>Pavardė</th><th>Gimimo Data</th>";

while ($row=$res->fetch()){ //fetch ima po viena eilute, isima duomenis, eilute row yra masyvas
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'] . '</td>';
    echo '<td>' . $row['a'] . '</td>';
    echo '<td>' . $row['asm_gdata'] . '</td>';
    echo '</tr>';
}
$res->closeCursor();