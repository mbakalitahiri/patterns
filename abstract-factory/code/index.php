<?php

namespace Myapp;
use MyApp\AssemblyLine\FordAssemblyLine;
use MyApp\Interfaces\AssemblyLineInterface;
require_once("./classes/FordAssemblyLine.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




class Index
{
  public $assemblyLineInterface;
  function __construct(\MyApp\Interfaces\AssemblyLineInterface $assemblyLineInterface){
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


$factory = new   FordAssemblyLine();
$index = new Index($factory);
$index->createTruck();

