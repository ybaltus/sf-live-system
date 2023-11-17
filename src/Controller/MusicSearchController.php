<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MusicSearchController extends AbstractController
{
    #[Route('/music/search', name: 'app_music_search')]
    public function index(): Response
    {
        return $this->render('music_search/index.html.twig', [
        ]);
    }
}
