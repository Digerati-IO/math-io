<?php
require '../vendor/autoload.php';

use Math\Algebra;
$app = new Slim\App();

$app->get('/', function ($request, $response, $args) {
    $response->write("Welcome to Slim!");
    return $response;
});

$app->get('/math/gcd/{a}/{b}', function ($request, $response, $args) {
    $response->write("GCD of " . $args['a'] . " and " . $args['b'] . " is: " . Algebra::gcd($args['a'], $args['b']));

    return $response;
});

$app->get('/math/lcm/{a}/{b}', function ($request, $response, $args) {
    $response->write("LCM of " . $args['a'] . " and " . $args['b'] . " is: " . Algebra::lcm($args['a'], $args['b']));

    return $response;
});

$app->get('/math/factors/{a}', function ($request, $response, $args) {
    $response->write("Factors of " . $args['a'] . " are " . print_r(Algebra::factors($args['a'])));

    return $response;
});

$app->run();
