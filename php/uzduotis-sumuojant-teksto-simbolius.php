<?php //susumuojami kiekvieno teksto simboliai + 1
$m = ['kazys', 'jonas', 'giedrius'];
    function pakeitimas ($mas){
    $rez = [];
    for ($i = 0; $i <count($mas); $i++) {
    $rez [] = $mas[$i] . '.' . (strlen($mas[$i])+1) . '.';
}
return $rez;
}

echo json_encode (pakeitimas($m)) . '<br>';
?>