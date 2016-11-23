<?php 

abstract class ab_asd {
  abstract public function test(array $asd);
}

class testint {
  const CIAO = 'CIAO';
}

class asd extends testint {
   
  const CIAO = 'HELLO';

  public function saluta($asd) {
    echo self::CIAO;
  }
} 
$array = [1,2];
$asd = new asd();
$asd->saluta($array);

