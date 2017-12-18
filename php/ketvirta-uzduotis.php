<?php
    function ilgis ($a){
        $v1 = 'karolis';
        $v2 = 'jonas' ;
        $v3 = 'kazys' ;

        if (strlen ($v1) == $a) return $v1;
        elseif (strlen ($v2) == $a) return $v2;
        elseif (strlen ($v3) == $a) return $v3;
            else return 'nerasta';
    }

echo '<br>';
    echo ilgis (5);

