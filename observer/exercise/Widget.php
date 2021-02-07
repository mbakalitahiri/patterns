<?php
require_once ("Observer.php");
class Widget extends  Observer {


    public function render()
    {
        // TODO: Implement render() method.
        foreach ($this->internalData as $k => $v){
           echo $k.' '.$v;
        }
    }
}
