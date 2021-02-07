<?php
namespace Adapter;
use Adapter\ITarget;
use Adapter\Adaptee;

class  Adaptador implements ITarget {

    public $adaptee;

    public function __construct(Adaptee $adaptee){
        $this->adaptee = $adaptee;
    }

    public function request()
    {
        // TODO: Implement request() method.
        return $this->adaptee->concreteMethod();
    }
}
