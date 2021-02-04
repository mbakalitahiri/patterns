<?php

declare(strict_types=1);

namespace Equipment;

interface ParameterProviderInterface
{

    function getPowerSupply(): double;

    function getCoolingSupply(): double;

    function getVoltageSupply(): double;

    function isThreePhase(): boolean;

    function getRatedCurrent(): double;

    function getPowerFactor(): double;

    function getNoLoadPowerLoss(): double;

    function getLoadPowerLoss(): double;


}
