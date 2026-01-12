<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected $routeMiddleware = [
    // Other middleware...
    'admin' => \App\Http\Middleware\AdminMiddleware::class,
];

}
