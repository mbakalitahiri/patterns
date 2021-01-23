<?php

class Context {
    private $_value1 ;
    private $_value2;
    private $_strategyOperation;
    public function __construct( $value1,$value2, StrategyOperation  $strategyOperation){
        $this->_value1 = $value1;
        $this->_value2 = $value2;
        $this->_strategyOperation = $strategyOperation;
    }
    public function perform(){
        return $this->_strategyOperation->perform($this);
    }

    public function getValue1 (){
        return $this->_value1;
    }
    public function getValue2 (){
        return $this->_value2;
    }
}

abstract class StrategyOperation {
    abstract function perform( Context $context);
}

class AdditionStrategy extends  StrategyOperation {
    public function perform(Context $context)
    {
        return $context->getValue1() + $context->getValue2();
    }
}

class SubstractionStrategy extends  StrategyOperation {
    public function perform(Context $context)
    {
        return $context->getValue1() - $context->getValue2();
    }
}

$str = new Context(2,3, new SubstractionStrategy());
echo $str->perform();