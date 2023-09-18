<?php 

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class MailService {
    private $mailer;

    public function __construct(MailerInterface $mailer) {
        $this->mailer = $mailer;
    }

    public function sendMail($userEmail, $subject, $message) {
        $email = (new TemplatedEmail())
            ->from('districtexample@80.com')
            ->to($userEmail)
            ->subject($subject)
            ->htmlTemplate('emails/contact_email.html.twig')
            ->context([
                'mail' => $userEmail,
                'subject' => $subject,
                'message' => $message,
                'expiration_date' => new \DateTime('+7 days'),
                'username' => 'The District',
            ]);

        $this->mailer->send($email);
    }


    public function sendMailCommande($userEmail, $subject, $message) {
        $email = (new TemplatedEmail())
            ->from('districtexample@80.com')
            ->to($userEmail)
            ->subject($subject)
            ->htmlTemplate('emails/commande_email.html.twig')
            ->context([
                'mail' => $userEmail,
                'subject' => $subject,
                'message' => $message,
                'expiration_date' => new \DateTime('+7 days'),
                'username' => 'The District',
            ]);

        $this->mailer->send($email);
    }
}

