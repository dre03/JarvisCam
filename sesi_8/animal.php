<?php

class Animal
{
  public $name;
  public $legs = 4;
  public $cold_blooded = "no";

  function __construct($name)
  {
    $this->name = $name;
  }
}