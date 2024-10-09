<?php

use Gtp\Main\Controllers\WebController;


return [
   
   ['GET' , '/' , [WebController::class , 'index'] ],
   ['GET' , '/about' , [WebController::class , 'about'] ],
   ['GET' , '/services' , [WebController::class , 'services'] ],
   ['GET' , '/terms-conditions' , [WebController::class , 'termsConditions'] ],
   ['GET' , '/contact-us' , [WebController::class , 'contactUs'] ],
   ['POST' , '/send' , [WebController::class , 'sendMail']],

];