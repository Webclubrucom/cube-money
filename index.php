<?php

$env = __DIR__ . "/core/.env";

	if(!file_exists($env)) {
	header("Location: /install/");
	}

	ini_set("display_errors",1);
	error_reporting(E_ALL);
	
	

require __DIR__.'/core/bootstrap/autoload.php';



$app = require_once __DIR__.'/core/bootstrap/app.php';


$app->bind('path.public', function() {
    return __DIR__;
    });


$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
