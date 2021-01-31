<?php
namespace MyApp\AssemblyLine;


use MyApp\Interfaces\AssemblyLineInterface;

class ChevyAssemblyLine implements AssemblyLineInterface
{

    function createCar()
    {
        return new ChevyMalibu();
    }

    function createTruck()
    {
        return new ChevySilverado();
    }

}

