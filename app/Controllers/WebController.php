<?php

namespace Gtp\Main\Controllers;
use Gtp\Src\Response;

class WebController extends Controller{


    public function index(){
        return new Response($this->view('home'));
    }

    public function about(){
        return new Response($this->view('about'));
    }

    public function services(){
        return new Response($this->view('services'));
    }

    public function termsConditions(){
        return new Response($this->view('terms-conditions'));
    }

    public function contactUs(){
        return new Response($this->view('contact-us'));

    }
}