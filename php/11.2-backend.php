<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018-01-04
 * Time: 09:05
 */

$cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
$res= $cnn->prepare ("insert into asmenys(asm_vardas, asm_pavarde, asm_gdata) values
 (:vardas,:pavarde,:gimimodata)"); //i mysql desim values butinai su :
$x= $res->execute ([
    ':vardas' => $_POST['vardas'],
    ':pavarde' => $_POST['pavarde'],
    ':gimimodata' => $_POST['gimimodata'],
]);

/**
$sql = "select * from asmenys";
$res = $cnn->query($sql);
echo '<table>';
echo "<th>Vardas</th><th>Pavarde</th><th>Gimimo data</th>";
while ($row=$res->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['asm_vardas'] . '</td>';
    echo '<td>' . $row['asm_pavarde'] . '</td>';
    echo '<td>' . $row['asm_gdata'] . '</td>';
    echo '</tr>';
}
echo '</table>';

//header('location: 11.2-frontend.html'); // redirektinti vartotoją į įvedimo formos
 */