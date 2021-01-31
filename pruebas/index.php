<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use pruebas;




class Index
{
  public $assemblyLineInterface;
  function __construct(_AssemblyLineInterface $assemblyLineInterface){
    $this->assemblyLineInterface = $assemblyLineInterface;
  }

    function createCar()
    {
       return $this->assemblyLineInterface->createCar();
    }

    function createTruck()
    {
      return $this->assemblyLineInterface->createTruck();
    }
}


$factory = new  pruebas\FordAssemblyLine();
$index = new Index($factory);
$index->createCar();
