<?php

namespace Gtp\Src\Traits;


trait CsrfToken{

    public function getCsrf(){
        if (! $this->session->has('csrf_token')) {
            $this->session->put('csrf_token' , $this->generate());
        }

        return $this->session->get('csrf_token');
    }


    private function generate(){

        $random = random_bytes(32);

        return bin2hex($random);
    }
}

