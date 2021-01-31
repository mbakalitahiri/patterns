<?php
namespace MyApp\AssemblyLine;
use Myapp\FordFiesta;
use MyApp\Interfaces;
use MyApp\Interfaces\AssemblyLineInterface;

require_once("./interfaces/AssemblyLineInterface.php");
require_once("FordFiesta.php");
require_once("FordF250.php");

  class FordAssemblyLine implements AssemblyLineInterface
{

    function createCar()
    {
        return new FordFiesta();
    }

    function createTruck()
    {
        return new \FordF250();
    }
}
