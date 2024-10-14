<?php

use Dotenv\Dotenv;
use Gtp\Src\Kernel;
use Gtp\Src\Request;
use Gtp\Src\Session;
use Gtp\Src\Application;


define('BASE_PATH' , dirname(__DIR__));



require_once dirname(__DIR__) . '/vendor/autoload.php';



 $app = Application::createInstance();


 $kernel = new Kernel();

 $response = $kernel->handle($app);
 
 $response->send();