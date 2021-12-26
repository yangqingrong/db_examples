<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "\nphp version: ". PHP_VERSION ."\n";
if( floatval( PHP_VERSION)<8 ){
    echo "require php8\n"; exit();
}

define('BASE_PATH', __DIR__ );

require_once  BASE_PATH .'/vendor/autoload.php';
\DB\S::config(include_once BASE_PATH .'/config/database.php');

$p = trim($argv[1],"/\r\n \t");
list( $m,$c,$a) = explode('/', $p);
$c = "\\app\\".$m."\\controller\\". ucfirst( $c);
 
$obj = new $c(); 
$v = $obj->$a();
print_r($v);








