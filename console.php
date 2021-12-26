<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "\nphp version: ". PHP_VERSION ."\n";
if( PHP_VERSION_ID < 80000 ){
    echo "ERROR: require php8! lower version has not attribute feature.\n"; exit();
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








