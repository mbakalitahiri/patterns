<?php


declare(strict_types=1);

namespace Equipment;

class MockParameterProvider implements  ParameterProviderInterface {


    private $presetParameters;

    public function getPowerSupply(): double
    {
        // TODO: Implement getPowerSupply() method.
    }

    public function getCoolingSupply(): double
    {
        // TODO: Implement getCoolingSupply() method.
    }


    public function getVoltageSupply(): double
    {
        // TODO: Implement getVoltageSupply() method.
    }

    public function isThreePhase(): boolean
    {
        // TODO: Implement isThreePhase() method.
    }

    public function getRatedCurrent(): double
    {
        // TODO: Implement getRatedCurrent() method.
    }

    public function getPowerFactor(): double
    {
        // TODO: Implement getPowerFactor() method.
    }
    public function getNoLoadPowerLoss(): double
    {
        // TODO: Implement getNoLoadPowerLoss() method.
    }

    public function getLoadPowerLoss(): double
    {
        // TODO: Implement getLoadPowerLoss() method.
    }

}