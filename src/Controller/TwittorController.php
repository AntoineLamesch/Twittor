<?php
// src/Controller/TwittorController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TwittorController extends AbstractController
{
    public function accueil(): Response
    {

        
        $texte = "haha";

        if ($this->getUser()) {

            return $this->render('twittor/accueil.html.twig', [
                'texte' => $texte,
                //dd('marcher pas')
            ]);

        }else{

            return $this->redirectToRoute('app_login');
        }
    }
}