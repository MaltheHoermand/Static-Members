<?php

require_once "classes/Product.php";



$gta5 = new Product();
$gta5->title = "GTA V";
$gta5->price = 299;

$cyberpunk = new Product();
$cyberpunk->title = "CyberPunk 2077";
$cyberpunk->price = 499;

// Her sættes $shipping til en ny værdi
Product::$shipping = 40;

var_dump($gta5);
var_dump($cyberpunk);

print (Product::$shipping);