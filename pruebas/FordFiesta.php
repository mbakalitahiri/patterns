<?php

require_once ("Car.php");
class FordFiesta implements Car
{
    function    __construct(){
        echo "Se ha crado un nuevo vehiculo Ford, modelo fiesta";
    }
}