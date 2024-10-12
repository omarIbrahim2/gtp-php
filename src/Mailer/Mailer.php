<?php

namespace Gtp\Src\Mailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


class Mailer{

    private $mail;
    public function __construct(){
         $this->mail = new PHPMailer(true);

         try {
            $this->mail->isSMTP();
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;   
            $this->mail->Host = env('MAIL_HOST' , '');
            $this->mail->SMTPAuth = true;
            $this->mail->Username = env("MAIL_USERNAME" , '');
            $this->mail->Password = env('MAIL_PASSWORD');
            $this->mail->Port = env('MAIL_PORT' , '');
            $this->mail->isHTML(false);

         } catch (\Throwable $th) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
         }
    }


    public function message(string $message){
        $this->mail->Body = $message;
        return $this;
    }

    public function to(string $email){
        $this->mail->addAddress($email);
        return $this;
    }

    public function send(){
        try {
            $this->mail->send();
        } catch (\Throwable $th) {
        
            echo $th->getMessage();
        }
        
    }






}