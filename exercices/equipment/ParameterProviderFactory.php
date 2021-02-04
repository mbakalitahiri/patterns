<?php

declare(strict_types=1);
namespace Equipment;

abstract class ParameterProviderFactory {

private $configuration;

abstract function createParameterProvider():ParameterProviderInterface;


}
