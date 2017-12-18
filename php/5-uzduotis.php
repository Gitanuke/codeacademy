<?php

function srifto_dydis ($dydis){
    switch ($dydis){
        case 'mazas': $kodas = '8px';break;
        case 'normalus' : $kodas = '12px'; break;
        case 'didelis' : $kodas = '16px'; break;
        case 'extra' : $kodas = '20px'; break;
        default: $kodas = '10px';
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

<br>Lorem Ipsum <span style="font-size:<?php  echo srifto_dydis ('didelis')?>">is simply dummy </span>  text of the printing and typesettingindustry.</br>
Lorem  Ipsum has been the industry'<span style="font-size:<?php  echo srifto_dydis ('extra')?>"> standard dummy</span> text ever since the 1500s,</br>
<span style="font-size:<?php  echo srifto_dydis ('normalus')?>">when an unknown</span> printer took a galley
of type and scrambled it to make a <span style="font-size:<?php  echo srifto_dydis ('mazas')?>">type specimen</span> book.</p>

<?php
echo '<script> alert ("!"); </script>';
?>
</body>
</html>