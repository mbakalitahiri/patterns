<?php

require_once("ChevyMalibu.php");
require_once("ChevySilverado.php");

class ChevyAssemblyLine implements _AssemblyLineInterface
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

