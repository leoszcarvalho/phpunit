<?php

require './vendor/autoload.php';

use PHPUnit_Framework_TestCase as PHPUnit;
use Application\Soma;

class Teste extends PHPUnit
{

  protected $soma;

  public function setUp(){

    $this->soma = new Soma;
  }

  public function testa_soma()
  {

    $this->assertEquals(15, $this->soma->realizaSoma(10, 5), "Não houve a soma correta dos valores");
  }


}


 ?>
