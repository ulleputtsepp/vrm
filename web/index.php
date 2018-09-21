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
//Database configuration
$app->register(new Silex\Provider\DoctrineServiceProvider(), [
    'db.options' => [
        'driver' => 'pdo_sqlite',
        'path' => __DIR__.'/../database/app.db',
    ],
]);

//Creating a table if it doesn't exist yet
if (!$app['db']->getSchemaManager()->tablesExist('bookings')) {
    $app['db']->executeQuery("CREATE TABLE bookings (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(40) NOT NULL,
        lastName VARCHAR(40) NOT NULL,
        phone VARCHAR(10) NOT NULL,
        email VARCHAR(20) DEFAULT NULL,
        birthday DATE NOT NULL,
        startDate DATE NOT NULL,
        endDate DATE NOT NULL,
        arrivalTime TIME DEFAULT NULL,
        additionalInformation TEXT,
        nrOfPeople INT NOT NULL,
        payingMethod VARCHAR(10) NOT NULL
    );");
}

$app->get('/bookings/create', function () use ($app) {
	return $app['twig']->render('base.html.twig');
});

$app->run();
?>