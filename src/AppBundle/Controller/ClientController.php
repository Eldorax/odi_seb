<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Panier;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Type\PanierChoiceType;

class ClientController extends Controller{
           
    //Interface du client
    public function interfaceAction(Request $request)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') == 'client' )
        {
           return $this->render('client/interface.html.twig');
        }  
        return $this->redirectToRoute('listproduit');
    }
    
    //Page d'acces au panier du client
    public function panierListAction(Request $request, $message)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
        }
        else
        {
            $paniers = $this->getClientPanier( $session->get('login') );
            return $this->render('panier/choix_panier_mod.html.twig',
                                ['paniers' => $paniers, 'msg' => $message]);
        }
    }
    
    
    //Suppresion d'un panier
    public function DeletePanierAction(Request $request, $numpanier)
    {
        //Vérification du client
        $session = $request->getSession();
        if( $session->get('access') != 'client' )
        {
           //pas client -> redirection
           return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
        }
        else
        {
            $paniers = $this->getClientPanier( $session->get('login') );
            
            $em      = $this->getDoctrine()->getManager();
            $key     = array("numpanier" => $numpanier);
            $p       = $em->find(Panier::class, $key);
            
            if( $p->getLogin() == $session->get('login') )
            {
                $em->remove($p);
                $em->flush();
            }
            else
            {
                return $this->redirectToRoute('listproduit',
                    array('message' => 'vous n\'etes pas autoriser à voir cette'
                        . 'cette page redirection...'));
            }
            
            return $this->redirectToRoute('panier_list',
                    array('message' => 'Panier supprimé'));
        }
    }
    
    //Retourne tous les paniers du client $login
    private function getClientPanier($login)
    {
        $em    = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                     'SELECT p.numpanier, p.etat
                     FROM AppBundle:Panier p
                     WHERE p.login = :p_login'
                    )->setParameter('p_login', $login);
        return $query->getResult();
    }
}