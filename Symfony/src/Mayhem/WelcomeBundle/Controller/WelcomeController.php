<?php

namespace Mayhem\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MayhemWelcomeBundle::layout.html.twig');
    }
	
    public function voirAction()
    {
	
		$mailer = $this->get('mailer');
		
	    $message = \Swift_Message::newInstance()
	      ->setSubject('Hello !')
	      ->setFrom(array('florianperrot0@gmail.com'=>'Florian perrot'))
	      ->setTo('florianperrot0@gmail.com')
	      ->setBody('Coucou, voici un email que vous venez de recevoir !');
	
	    // Retour au service mailer, nous utilisons sa méthode « send() » pour envoyer notre $message
	    $mailer->send($message);
	
	    // N'oublions pas de retourner une réponse, par exemple une page qui afficherait « L'e-mail a bien été envoyé »
	    return new Response('<html><body>Email bien envoyé</body></html>');
    }	
}