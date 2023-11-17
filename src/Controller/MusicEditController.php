<?php

namespace App\Controller;

use App\Entity\Music;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MusicEditController extends AbstractController
{
    #[Route('/music/edit/{id}', name: 'app_music_edit')]
    public function index(Music $music): Response
    {
        return $this->render('music_edit/index.html.twig', [
            'music' => $music,
        ]);
    }
}
