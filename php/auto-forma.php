<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>gitana mac</title>
</head>
<body>

<form method="get">

    <label>Gamintojas: </label><input name="gam" type="text"><br>
    <label>Modelis: </label><input name="mod" type="text"><br>
    <label>Pagaminimo metai: </label><input name="met" type="text"><br>
    <input type="submit" value="Vykdyti">
</form>
<?php
class handleForm{
    public $text;
function totext ($gami, $mod, $meta){ //input name, pagal kuri imama reiksme
    $sablonas= "Gamintojas:%s, modelis:%s, metai:%s";
    return sprintf($sablonas, $gami, $mod, $meta);
}
}
$masina = new handleForm();
if (isset ($_GET['gam']) && isset ($_GET ['mod']) && ($_GET['met'])) {

    echo $masina->toText($_GET['gam'], $_GET['mod'], $_GET['met']);
} else echo 'Iveskite duomenis';

//echo "Gamintojas:" . $_GET['gam'] . .........
?>
</body>
</html>
