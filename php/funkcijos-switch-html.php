<?php

function spalvos_kodas ($spalva){
    switch ($spalva){
        case 'raudona': $kodas = 'red';break;
        case 'geltona' : $kodas = 'yellow'; break;
        case 'tamsus' : $kodas = '#222'; break;
        default: $kodas = 'black';
    }
    return $kodas;
}
?>

<!DOCTYPE html>
<html lang="en">
<link>
<head>
<meta charset="UTF-8">
<title>Title</title>
</head>
<body>

<br>Lorem Ipsum <span style="color:<?php  echo spalvos_kodas ('raudona')?>">is simply dummy </span>  text of the printing and typesettingindustry.</br>
    Lorem  Ipsum has been the industry  <span style="color:<?php  echo spalvos_kodas ('geltona')?>"> standard dummy</span> text ever since the 1500s,</br> when an unknown printer took a galley
    of type and scrambled it to make a type specimen book.</p>

</body>
</html>
