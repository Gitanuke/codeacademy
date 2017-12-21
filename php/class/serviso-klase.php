<?php
class servisas extends automobilis {
  function info () {
      $automobilis= 'gamintojas:%s, modelis:%s, metai:%s';
      return $this->gamintojas." " .$this->modelis." ".$this->metai;
  }
}