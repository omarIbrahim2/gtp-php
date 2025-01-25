<?php

namespace Gtp\Src\Mailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;


class Mailer{

    private PHPMailer $mail;
    public function __construct(){
         $this->mail = new PHPMailer(true);

         try {
            $this->mail->isSMTP();
            $this->mail->SMTPDebug = 0;  
            $this->mail->Host = env('MAIL_HOST' , '');
            $this->mail->SMTPAuth = true;
            $this->mail->Username = env("MAIL_USERNAME" , '');
            $this->mail->Password = env('MAIL_PASSWORD');
            $this->mail->Port = env('MAIL_PORT' , '');
            $this->mail->isHTML(true);

         } catch (\Throwable $th) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
         }
    }


    public function message(array $message){
        $file = file_get_contents(BASE_PATH . '/views/email/template.php');
        $file = str_replace(
            ['{name}' , '{phone}' , '{message}'] , 
            [$message['name'] , $message['phone'] , $message['message']],
             $file);

            $text = $this->mail->msgHTML($file); 

             $this->mail->Body = $text;
     
        return $this;
    }



    public function to(){
        $this->mail->addAddress(env("MAIL_FROM_ADDRESS" , ''));
        return $this;
    }

    public function send($email){ 
          $this->mail->From = $email;           
            $this->mail->send();
    }


  






}