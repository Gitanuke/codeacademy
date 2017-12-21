<?php
class svecias {
    public $vardas;
    public $pavarde;
    public $maistas;
    function __construct ($vardas, $pavarde, $maistas) {
        $this->vardas = ucfirst (strtolower($vardas));
        $this->pavarde = ucfirst (strtolower($pavarde));
        $this->maistas = ucfirst (strtolower($maistas));
    }
    function eilute (){ //su lentele isvedami rezultatai
        $s ='<tr>';
        $s.='<td>' . $this->vardas . '</td>';
        $s.='<td>' . $this->pavarde . '</td>';
        $s.='<td>' . $this->maistas . '</td>';
        $s.='</tr>';
        return $s;
    }
}
//$s = new svecias ('Sandra', 'Sandraityte', 'salotos');
//echo $s-> eilute() . '<br>';

$sveciai = [];
$sveciai [] = new svecias ('jonas', 'jonaitis', 'zuvis');
$sveciai [] = new svecias ('petras', 'petraitis', 'mesa');
$sveciai [] = new svecias ('antanas', 'antanaitis', 'vegetaras');
var_dump ($sveciai);

echo '<table>';
echo "<th>Vardas</th><th>Pavarde</th><th>Maistas</th>";
foreach($sveciai as $sv){ //kiekviena karta imeta sekancio masyvo veiksma
    echo $sv->eilute();
}
echo '</table>';
