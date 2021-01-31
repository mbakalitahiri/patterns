<?php
namespace pruebas;


class FordAssemblyLine implements _AssemblyLineInterface
{

    function createCar()
    {
        return new FordFiesta();
    }

    function createTruck()
    {
        return new FordF250();
    }
}
