<?php





var_export ($_POST); echo '<hr>';
echo $_POST['vardas'] . '<hr>';
echo $_POST ['pavarde'] . '<hr>';
echo $_POST ['maistas'] . '<hr>';

foreach($_POST as $key =>$value){
    echo $key . ': ' . $value . '<br>';

}

echo '<a href="post-html.html"> Atgal</a>';


//value = tai, ka irasome i forma 'jonas', jonaitis....
//key tai input name  'vardas', 'pavarde'....