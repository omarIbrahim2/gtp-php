<?php

use Gtp\Main\middlewares\CsrfMiddleware;



return[

    'middlewares' =>[
       'csrf'=> CsrfMiddleware::class,
    ],
];