<?php
require_once("./interfaces/Truck.php");
use MyApp\Interfaces\Truck;

 class FordF250 implements Truck
{

 function __construct(){
     echo "Se ha crado un nuevo tractor Ford model F250";
 }

}
?>
