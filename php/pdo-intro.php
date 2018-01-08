<?php
$cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
$sql = "select count(*) as cnt from darbas";
$res = $cnn->query($sql);
while ($row=$res->fetch()){
    echo $row['cnt'] . '<br>';
    //var_export ($row);

}
$res->closeCursor();

$sql = "select * from darbas";
$res = $cnn->query($sql);
echo '<table>';
while ($row=$res->fetch()){
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'] . '</td>';
    echo '<td>' . $row['aut_modelis'] . '</td>';
    echo '<td>' . $row['aut_kaina'] . '</td>';
    echo '<td>' . $row['aut_metai'] . '</td>';

    echo '</tr>';

    //var_export ($row);

}
$res->closeCursor();

$sql = "select * from darbas where aut_kaina>2000";
$res = $cnn->query($sql);
echo '<table>';
while ($row=$res->fetch()){ //fetch ima po viena eilute, isima duomenis, eilute row yra masyvas
    echo '<tr>';
    echo '<td>' . $row['aut_gamintojas'] . '</td>';
    echo '<td>' . $row['aut_modelis'] . '</td>';
    echo '<td>' . $row['aut_kaina'] . '</td>';
    echo '<td>' . $row['aut_metai'] . '</td>';

    echo '</tr>';
}
$res->closeCursor();