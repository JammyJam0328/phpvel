<?php
$router = new \Bramus\Router\Router();

$router->get('/', function() {
    render('welcome');
});



$router->run();