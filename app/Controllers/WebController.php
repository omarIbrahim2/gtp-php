<?php

namespace Gtp\Main\Controllers;
use Gtp\Src\Exceptions\ValidationException;
use Gtp\Src\Mailer\Mailer;
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
        
           $data = $this->request->validate([
             'name' => [ 'nullable', 'string' ,'max:100'] , 
             'email' => [ 'required' , 'email'],
             'phone' => [ 'nullable','phone'],
             'message' => ['required','string'],
             ]);
             
             
             $mailer = new Mailer();

             try {
                
                $mailer->message($data['message'] ?? '')->to($data['email'])->send();

                 session()->flash('success' , 'sent successfully');

                  header('location:'. $this->request->referer());
                  exit;
             } catch (\Throwable $th) {
                 session()->flash('error' , 'error happened ..');
                 
                 header('location:'. $this->request->referer());
                 exit;
             }

             
        
    }

    public function footerSendMail(){
        $data = $this->request->validate([
            'email-footer' => [ 'required' , 'email'],
            'message-footer' => ['required','string'],
            ] ,[
                'email-footer.required' => 'email is required',
                'message-footer.required' => 'message is required',
                'email-footer.email' => 'is not a valid email',
                'message-footer.string' => 'message must be a string'

            ]);
            
            
            $mailer = new Mailer();

            try {
               
               $mailer->message($data['message-footer'] ?? '')->to($data['email-footer'])->send();

                session()->flash('success-footer' , 'sent successfully');

                 header('location:'. $this->request->referer());
                 exit;
            } catch (\Throwable $th) {

                session()->flash('error-footer' , 'error happened ..');
                
                header('location:'. $this->request->referer());
                exit;
            }
    }
}