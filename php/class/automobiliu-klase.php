<?php
class  automobilis
{
    public $gamintojas;
    public $modelis;
    public $metai;
    function __construct($g, $m, $me){
        $this->gamintojas = $g;
        $this->modelis = $m;
        $this->metai = $me;
    }
}
