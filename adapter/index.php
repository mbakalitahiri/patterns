<?php
require_once ("Adaptador.php");
 use Adapter\Adaptee;
 use Adapter\Adaptador;

$adapter = new Adaptador(new Adaptee());
echo $adapter->request();
