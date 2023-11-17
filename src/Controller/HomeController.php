<?php

namespace App\Controller;

use App\Entity\Music;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $em
    )
    {
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $musics = $this->em->getRepository(Music::class)->findAll();
        return $this->render('home/index.html.twig', [
            'musics' => $musics,
        ]);
    }
}
