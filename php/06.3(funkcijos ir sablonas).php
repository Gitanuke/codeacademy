<?php
/**
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus tris parametrus ‐ tekstus,
 * funkcija turi grąžinti rezultatą ‐ formatuota tekstą. Teksto formatavimui naudokite šabloną.
 */

function parametrai ($n, $sur, $maistas){
    $sablonas = "vardas: %s, pavarde: %s, maistas: %s";
    return sprintf($sablonas, $n, $sur, $maistas);
}

$r =  parametrai('Jonas', 'Jonaitis', 'mesa'); // sukuriame person klasės objekto egzempliorių
echo $r;