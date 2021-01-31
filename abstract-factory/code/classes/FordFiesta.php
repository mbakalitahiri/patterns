<?php
namespace Myapp;
 require_once("./interfaces/Car.php");

class FordFiesta implements \MyApp\Interfaces\Car
{
    function    __construct(){
        echo "Se ha crado un nuevo vehiculo Ford, modelo fiesta";
    }
}