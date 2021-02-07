<?php

abstract  class ObservableNew {

    public $obsevers = [];



    function addObserver( Observer $observer)
    {
        array_push($this->obsevers, $observer);
    }

    public function notify(){
        for($i=0;$i<count($this->obsevers);$i++){
            $this->obsevers[$i]->update($this);
        }
    }



    abstract function getData();




}