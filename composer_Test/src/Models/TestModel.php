<?php

namespace src\Models;

class TestModel
{
  private $text = 'hello world';

  public function getHello(){
    return $this->text;
  }
}



?>