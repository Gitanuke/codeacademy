<!DOCTYPE html>
<html lang="en">
<link>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$asmuo = [
    [
        'vardas' => 'Sandra',
        'pavarde' => 'Kersyte',
        'maistas' => 'salotos',
        'lytis' => 'moteris'
    ],

    [
        'vardas' => 'Tomas',
        'pavarde' => 'Tomkus',
        'maistas' => 'Steikas',
        'lytis' => 'vyras'
    ],

    [
        'vardas' => 'Giedrius',
        'pavarde' => 'Luksys',
        'maistas' => 'Krevetes',
        'lytis' => 'vyras'
    ]
];

function getInfo($asmenys){
    $s = '';
    $s .= '<td>' . $asmenys ['vardas'] . '</td>';
    $s .= '<td>' . $asmenys ['pavarde'] . '</td>';
    $s .= '<td>' . $asmenys ['maistas'] . '</td>';
    $s .= '<td>' . $asmenys ['lytis'] . '</td>';
    return $s;
}
?>

<table>
    <tr>
        <th>Nr</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Maistas</th>
        <th>Lytis</th>
    </tr>
    <?php
    $nr = 1;
    foreach ($asmuo as $asmenys){
        echo '<tr>';
        echo '<td>' . $nr++ . '</td>';
        echo getInfo($asmenys);
        echo '<tr>';

    }
    ?>
</table>

</body>
</html>
