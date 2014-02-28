<?php

namespace Mayhem\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
  public function voirAction($id)
  {
    return $this->render('MayhemBlogBundle:Blog:voir.html.twig', array(
      'id'  => $id
    ));
  }
    
  // Ajoutez cette méthode ajouterAction :
  public function ajouterAction()
  {
    // Bien sûr, cette méthode devra réellement ajouter l'article
    // Mais faisons comme si c'était le cas
    $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');

    // Le « flashBag » est ce qui contient les messages flash dans la session
    // Il peut bien sûr contenir plusieurs messages :
    $this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');
        
    // Puis on redirige vers la page de visualisation de cet article
    return $this->redirect( $this->generateUrl('mayhemblog_voir', array('id' => 5)) );
  }
  

}