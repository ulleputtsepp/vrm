<?php
//web/index.php
//to bootstrap Silex require the
//vendor/autoload.php file
require_once __DIR__.'/../vendor/autoload.php';

use BookingApp\Application;

$app = new Application();

$app->run();
?>