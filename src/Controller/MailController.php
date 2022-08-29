<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;


class MailController extends AbstractController
{
    /**
     * @Route("/mail", name="app_mail")
     */
    public function sendEmail(MailerInterface $mailer, Request $request): Response
    {
    	$userEmailAddress = $request->get('email');
    	
        $email = (new Email())
            ->from('noreply@mail.com')
            ->to($userEmailAddress)
            ->replyTo('noreply@mail.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Csv Vat File')
            ->text('...!')
            ->html('<p>....!</p>');

        $mailer->send($email);
        return $this->redirectToRoute('app_vat');
    }
}
