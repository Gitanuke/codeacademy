<?php
/*
 1)padaryti klase automobiliai
2)sukurti funkcija automobilis:
 (gamintojas, modelis, kuras:dyzelis ir benzinas, kuro sanaudos (kiek litru /100km)
funkcija turi patalpinti automobilio duomenis kaip asoc.masyva i klases savybe sarasas(paprastas masyvas)
3)sukurti funkcija kurovidurkisDyzelis kuri grazina dyzeliniu masinu kuro sanaudu vidurki
4)sukurti funkcija kurovidurkisbenzinas kuri grazina  benzininiu masinu kuro sanaudo vidurki
 */


class automobiliai{
    public $sarasas;
    function automobilis($gamintojas, $modelis, $kuras, $kurosanaudos){
        if (!isset($this->sarasas)) $this->sarasas = [];
        $this->sarasas[] = [
            'g' => $gamintojas,
            'mo' => $modelis,
            'kuras' =>$kuras,
            'kurosa'=>$kurosanaudos
        ];
    }

    function kurovidurkisDyzelis(){
        $sum=0;
        $kiek=0;
        for ($i = 0; $i < count($this->sarasas); $i++) {
            if ($this->sarasas[$i]['kuras'] == 'dyzelis')
            $sum = $sum + $this->sarasas[$i]['kurosa'];
            $kiek= $kiek+1;
            }
            return $sum/$kiek;
    }

    function kurovidurkisbenzinas(){
        $sum=0;
        $kiek=0;
        for ($i = 0; $i < count($this->sarasas); $i++) {
            if ($this->sarasas[$i]['kuras'] == 'benzinas')
                $sum = $sum + $this->sarasas[$i]['kurosa'];
            $kiek= $kiek+1;
        }
        return $sum/$kiek;
    }
    }
$auto = new automobiliai(); // sukuriame klasės objekto egzempliorių
$auto->automobilis ('BMW', '320i', 'benzinas', 100);
$auto->automobilis('Infinity', 'fx37', 'benzinas', 50);
$auto->automobilis('Audi', '100', 'dyzelis', 40);
$auto->automobilis('Mitsubishi', 'Grandis', 'dyzelis', 200);
echo $auto->kurovidurkisDyzelis();
echo '<br>';
echo $auto->kurovidurkisbenzinas();
echo '<br>';