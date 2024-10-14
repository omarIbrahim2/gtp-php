<?php

namespace Gtp\Main\middlewares;
use Gtp\Src\Response;


class CsrfMiddleware{

    public function handle($request , $next){
        if ($request->isPostMethod()) {
            $app =$request->getApplication();
            
            if (!$request->has('token') && $request->token !== $app->getCsrf()) {
                return new Response(abort('419') , 419);
            }
        }

        return $next($request);

    }
}