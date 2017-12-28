<?php
class numberList{
public $numbers;
function add($numbers){
if (!isset($this->numbers)) $this->numbers=[]; $this->numbers[]=$numbers;

}
function vid(){
$sum = 0;
for ($i=0; $i<count($this->numbers); $i++){
$sum += $this->numbers[$i];
}
return $sum / count($this->numbers);
}
}

$objektas = new numberList();
$objektas->add(2);
$objektas->add(3);
$objektas->add(1);
$objektas->add(5);
$objektas->add(6);
$objektas->add(3);

echo $objektas->vid();

?>