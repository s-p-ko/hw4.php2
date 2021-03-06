<?php
require __DIR__ . '/autoload.php';

$parts = explode('/', $_SERVER['REQUEST_URI']);
$name = (!empty($parts[1])) ? ucfirst($parts[1]) : 'Index';
$classController = '\App\Controllers\\' . $name;
$controller = new $classController;
$controller->prop = (!empty($parts[2])) ? $parts[2] : null;
$controller();
