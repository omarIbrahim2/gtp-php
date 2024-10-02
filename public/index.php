<?php

use Gtp\Src\Application;
use Gtp\Src\Kernel;
use Gtp\Src\Request;


define('BASE_PATH' , dirname(__DIR__));



require_once dirname(__DIR__) . '/vendor/autoload.php';



 $app = new Application(Request::createFromGlobals());


 $kernel = new Kernel();

 $response = $kernel->handle($app);
 
 $response->send();