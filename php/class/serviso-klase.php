<?php
class servisas extends automobilis {
  function info () {
      $auto= 'gamintojas:%s, modelis:%s, metai:%s';
      return sprintf($auto,  $this->gamintojas." " .$this->modelis." ".$this->metai);
  }
}