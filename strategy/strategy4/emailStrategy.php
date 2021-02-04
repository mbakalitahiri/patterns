<?php
require_once ("strategyReceiving.php");
class EmailStrategy extends StrategyReceiving {


public function saludar(){
    echo $this->invoice->products->getDescription();
}




}
