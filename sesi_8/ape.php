<?php

require_once 'animal.php';

class Ape extends Animal
{
  public $legs = 2;
  public function yell()
  {
    return "Yell : Auooo ";
  }
}