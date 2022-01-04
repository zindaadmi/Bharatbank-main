<?php


require_once ("vendor/autoload.php");
include("src/Bank.php");
//require_once("vendor/autoload.php");



//$operation = $argv[1];
$t = new \Bank\Bank();
$operation = $argv[1];
unset($argv[0]);
unset($argv[1]);

var_dump($t->$operation(...$argv));


