<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ("product.php");
require_once ("customer.php");
require_once ("emailStrategy.php");
require_once ("strategyReceiving.php");
require_once ("invoice.php");


$productos = [new Product("Nike", 25), new Product("Adidas", 23)];
$customer = new Customer("Mohtadi", "Avenida de la paz, 139, 1A","motadi@hotmail.com");

$invoice = new Invoice( new Product("Adidas", 23), $customer, new EmailStrategy());

echo $invoice->receiving( ) ;

