<?php
declare(strict_types=1);
namespace Equipment;
use Equipment\AbstractItemFunction;

abstract class ItemFunctionFactory {
    public $parameterProviderFactory;
    abstract function createItemFunction():AbstractItemFunction;
    abstract function getParameterProviderFactory():ParameterProviderFactory;
}