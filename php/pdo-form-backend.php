<?php
$cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
$res= $cnn->prepare ("insert into auto(aut_gamintojas, aut_modelis, aut_metai, aut_kaina) values
 (:gamintojas,:modelis,:metai,:kaina)"); //i mysql desim values butinai su :
$x= $res->execute ([
    ':gamintojas' => $_POST['gamintojas'],
    ':modelis' => $_POST['modelis'],
    ':metai' => $_POST['metai'],
    ':kaina' => $_POST['kaina'],
]);


$sql = "select * from auto";
$res = $cnn->query($sql);
echo '<table>';
echo "<th>Gamintojas</th><th>Modelis</th><th>Kaina</th><th>Metai</th>";
while ($row=$res->fetch()) {
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'] . '</td>';
    echo '<td>' . $row['aut_modelis'] . '</td>';
    echo '<td>' . $row['aut_kaina'] . '</td>';
    echo '<td>' . $row['aut_metai'] . '</td>';
    echo '</tr>';
}
echo '</table>';

echo '<a href="pdo-form-frontend.html">Grįžti atgal į formą </a>'; //grizti atgal i forma