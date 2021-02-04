<?php

declare(strict_types=1);

namespace Equipment;

abstract class AbstractItemFunction {

    private $parameterProvider;
    private $overridenPowerSupply;
    private $overridenCoolingSupply;


    /*function __construct(ParameterProviderInterface $parameterProvider)
    {
    }*/

    function __construct(ParameterProviderInterface $parameterProvider,$powerSupply, $coolingSupply)
    {
    }

     abstract function getPowerLoad():double;
    abstract function getCoolingLoad():double;
    abstract function getParameterProvider():ParameterProviderInterface;
    abstract function getPowerSupply():double;
    abstract function getCoolingSupply():double;
    abstract function setPowerSupply(double $power);
    abstract function setCoolingSupply(double $power);




}