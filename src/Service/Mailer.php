<?php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;


class Mailer{ 

private $mailerInterface;

    public function __construct(MailerInterface $mailer){
        $this->mailerInterface = $mailer;
    }

    public function sendMail(string $email, string $subject, string $template){

        $email = (new Email())
              ->from("contact@company.fr") 
              ->to($email)
              ->subject($subject)
              ->html($template);
        
        $this->mailerInterface->send($email);

        return "mail send";
    }

}

?>

