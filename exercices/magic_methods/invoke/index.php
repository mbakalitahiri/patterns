<?php

class Butterfly {


    private function sayHello(){
        echo  "Hello world";
    }


    function __invoke(){
        return $this->sayHello();
    }



}

$but = new Butterfly();
$but();
