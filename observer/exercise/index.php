<?php
require_once ("Widget.php");
require_once ("Observer.php");
require_once ("Observable.php");
require_once ("Datasource.php");
$wi = new Widget();
$dt = new Datasource();
$dt->addObserver($wi);
$array = ["nombre" => "bakali tahirina"];
$dt->addData($array);
$wi->render();

