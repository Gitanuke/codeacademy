<?php
//exception kai programoje vyksta nenumatytas atvejis, klaida
try {
    $cnn = new PDO('mysql:host=gitanamac.lt;dbname=test', 'root');
    $cnn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $res = $cnn->query("select aut_gamintojas from darbas");
    while ($a = $res->fetch()) {
        echo $a['aut_gamintojas'] . '<br>';
    }
}
catch (PDOException $err){ //veiks kai ivyks klaida
    echo $err->getMessage();
}