<?php
namespace Adapter;
use Adapter\ITarget;
use Adapter\Adaptee;
require_once ("ITarger.php");
require_once ("Adaptee.php");
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
