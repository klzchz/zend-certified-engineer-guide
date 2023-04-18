<?php 
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

CLASS Dog {
  public function latir(){
      print "Latindo\n\n<br/4>";
  }
}

$dog = new Dog;
$dog->latir();

@$a  = 0;

if(EMPTY($a)) {
  print "Olá eu estou vazio ! \n";
}

