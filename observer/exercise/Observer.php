<?php


abstract class Observer {
    public $internalData ;

    public function update( ObservableNew $observable){
        $this->internalData = $observable->getData();
    }

    abstract function render();

}