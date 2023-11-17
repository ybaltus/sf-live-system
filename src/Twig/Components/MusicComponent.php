<?php

namespace App\Twig\Components;

use App\Entity\Music;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent()]
final class MusicComponent
{
    public Music $music;
}
