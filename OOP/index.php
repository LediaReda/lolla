<?php

require_once 'Epemloyre.php';
$user = new Manager();
$user->name = 'Hamada';
$user->email= 'hamada@eraasoft.com';
$user->phone = '01258796423';
$user->setSalary(50000);
echo $user->getSalary();




// $product->description = "Small Description";