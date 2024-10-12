<?php

namespace Gtp\Src\Validations\Rules;

interface Rule{

    public function handle($value , $params = null);
}