<?php

use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\ServerRequestFactory;

/**
 * @var \Psr\Container\ContainerInterface $container
 * @var \Framework\Http\Application $app
 */


chdir(dirname(__DIR__));
require 'vendor/autoload.php';

### Initialization

$request = ServerRequestFactory::fromGlobals();

$name = $request->getQueryParams()['name'] ?? 'Guest';

$response = (new HtmlResponse('Hello, ' . $name . '!'))
    ->withHeader('X-Developer', 'rblack');

### Sending

$emitter = new SapiEmitter();
$emitter->emit($response);
