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

$app->register(new Silex\Provider\TwigServiceProvider(), [
	'twig.path' => __DIR__.'/../views',
]);
$app->get('/bookings/create', function () use ($app) {
	return $app['twig']->render('base.html.twig');
});

$app->run();
?>