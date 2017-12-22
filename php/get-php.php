<?php
class salis {
    function eilute ($salis, $sostine, $skaicius){
        return "<tr><td>".$salis."</td><td>".$sostine."</td><td>".$skaicius."</td></tr>";
    }

    }

    $a = new salis ();
echo '<table>';
echo $a->eilute($_GET['salis'],  $_GET['sostine'],  $_GET ['skaicius']);
echo '</table>';

?>
