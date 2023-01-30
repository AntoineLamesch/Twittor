<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MessagesRepository;
use Twig\Template\twittor;


/**
 * Class ArticlesController
 * @package App\Controller
 * @Route("/twittor", name="Twittor_")
 */
class MessagesController extends AbstractController
{
    
    /**
     *@Route("/", name="app_messsages")
     */
    public function index(MessagesRepository $messagesRepo): Response
    {
        $messages = $messagesRepo->findAll();

        return $this->render('twittor/accueil.html.twig', [

            'messages' => $messages
        ]);
    }
}
