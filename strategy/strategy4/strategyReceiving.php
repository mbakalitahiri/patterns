<?php
require_once ("invoice.php");
abstract class StrategyReceiving {

    public $invoice;


    public function run(Invoice $invoice){
        $this->invoice = $invoice;
        $this->saludar();
    }


}
