<?php
require __DIR__ . '/../autoload.php';

// Точка входа для админ-панели
$parts = explode('/', $_SERVER['REQUEST_URI']);
$name = (!empty($parts[2])) ? ucfirst($parts[2]) : 'Index';
$classController = '\App\Controllers\Admin\\' . $name;
$controller = new $classController;
$controller->prop = (!empty($parts[3])) ? $parts[3] : null;
$controller();
