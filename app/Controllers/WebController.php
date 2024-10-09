<?php

namespace Gtp\Main\Controllers;
use Gtp\Src\Request;
use Gtp\Src\Response;
use Gtp\Src\Validations\Validator;

class WebController extends Controller{

    public function __construct(Request $request){
        parent::__construct($request);
    }

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

    public function sendMail(){
        Validator::make($this->request->data() , ['email' => ['required' , 'email'] , 'name' => ['required']]);

       dd( Validator::$errors);
    }
}