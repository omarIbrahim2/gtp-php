<?php

function url(string $uri):string{
     return $_ENV['APP_URL'] . $uri;
}