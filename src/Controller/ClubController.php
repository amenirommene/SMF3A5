<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClubController extends AbstractController
{
    //1 méthode du contrôleur

    //route de la méthode index : path : /club
    #[Route('/mohamed', name: 'app_club')]
    public function index(): Response
    {
        //render : méthode prédéfinie qui retourne une vue 
        //render(chemin de la vue sous le dossier templates,liste des paramètres à envoyer vers la vue)
        //[nom du paramètre => valeur du paramètre]
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }

    #[Route('/index2', name: 'app_index2')]
    public function index2(): Response
    {
        //render : méthode prédéfinie qui retourne une vue 
        //render(chemin de la vue sous le dossier templates,liste des paramètres à envoyer vers la vue)
        //[nom du paramètre => valeur du paramètre]
        return $this->render('club/index.html.twig', [
            'controller_name' => 'ClubController',
        ]);
    }
}
