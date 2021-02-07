<?php

require_once ("Observable.php");

class  Datasource  extends  ObservableNew {

    public $internalData;

    public function addData(array $arr){
        $this->internalData = $arr;
        $this->getData();
         $this->notify();
    }

    public function getData()
    {
        // TODO: Implement getData() method.
        return $this->internalData;
    }
}
