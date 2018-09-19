<?php
//web/index.php
//to bootstrap Silex require the
//vendor/autoload.php file
require_once __DIR__.'/../vendor/autoload.php';
//and create an instance of 
//Silex\Application
$app = new Silex\Application();
//to turn on the debug mode
$app['debug'] = true;

$app->get('/hello', function() {
	return 'Hello world!';
});

$app->run();
?>