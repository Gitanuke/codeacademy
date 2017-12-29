<?php
/*padaryti klase personalas
sukurti funkcija persona.parametrai:
a.vardas, pavarde, lytis
funkcijaturi patalpinti personos duomenis kaip asociatyvini masyva i klase savybes darbuotojai
sukurti funkcija kiekmoteru kuri grazina personalo mot skaiciu
sukurti funkcija kiek vyru kuri grazina personalo vyr sk.
*/
class personalas{
    public $darbuotojai;

    function persona($vardas, $pavarde, $lytis){
        if (!isset($this->darbuotojai)) $this->darbuotojai = [];
        $this->darbuotojai[] = [
            'v' => $vardas,
            'pa' => $pavarde,
            'lytis' => $lytis

        ];
    }

    function kiekMoteru(){
        $mot = 0;
        for ($i = 0; $i < count($this->darbuotojai); $i++) {
            if ($this->darbuotojai[$i]['lytis'] == "moteris") $mot += 1;
        }
        return $mot;
    }

    function kiekVyru(){
        $vyr = 0;
        for ($i = 0; $i < count($this->darbuotojai); $i++) {
            if ($this->darbuotojai[$i]['lytis'] == "vyras") $vyr += 1;
        }
        return $vyr;
    }
}
$personalas = new personalas(); // sukuriame klasės objekto egzempliorių
$personalas->persona ('Joana', 'Joanyte', 'moteris');
$personalas->persona('Jonas', 'Jonaitis', 'vyras');
$personalas->persona('Petras', 'Petraitis', 'vyras');
$personalas->persona('Donatas', 'Donaitis', 'vyras');
echo $personalas->kiekMoteru();
echo '<br>';
echo $personalas->kiekVyru();
echo '<br>';

