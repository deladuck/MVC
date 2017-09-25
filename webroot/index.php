<?php
	
	define('DS', DIRECTRY_SEPARATOR); //символ Разделителя директорий 
	define('ROOT', dirname(dirname(__FILE__))); // указывает на директорию на уровень выше, чем index.php

	$routes = include '../lib/routes.php';

	$uri = $_SERVER['REQUEST_URI'];

	print_r($uri);
	echo "<br>";

	if (array_key_exists($uri, $routes)) {
		echo $routes[$uri];
	} else {
		echo $routes['*'];
	}

?>