<?php
class numberList {
    public $numbers = [];
    function add($number){
        $this->numbers[] = $number;
    }
    function average(){
        $sum = 0;
        for ($i=0; $i<count($this->numbers); $i++){
            $sum += $this->numbers[$i];
        }
        return $sum / count($this->numbers);
    }
}
$objektas = new numberList();
$objektas->add(5);
$objektas->add(14);
$objektas->add(27);
echo $objektas->average();