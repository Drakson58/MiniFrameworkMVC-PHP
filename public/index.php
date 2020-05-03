<?php
	require_once "../vendor/autoload.php";//Arquivo que dará permissão para fazer o autoload. 

	$route = new \App\Route;//Recuperando a classe do dir.

	echo '<pre>';
	print_r($route->getUrl());
	echo '</pre>';
	echo '<hr>';
	print_r($route->getRoutes());

?>