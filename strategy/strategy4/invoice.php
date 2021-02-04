<?php

require_once ("product.php");
require_once ("customer.php");
require_once ("strategyReceiving.php");

class Invoice {
    public $products = [];
    public $customer ;
    public $strategyReceiving;

    public function __construct( Product $products, Customer $customer,StrategyReceiving $strategyReceiving){
        $this->products = $products;
        $this->customer = $customer;
        $this->strategyReceiving = $strategyReceiving;
    }


    public function receiving ( ){
        $this->strategyReceiving->run($this);
    }


}
