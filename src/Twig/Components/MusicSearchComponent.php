<?php

namespace App\Twig\Components;

use App\Entity\Music;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent()]
final class MusicSearchComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public ?string $searchTerm = null;

    public function __construct(
        private EntityManagerInterface $em
    )
    {
    }

    public function getMusics(): array
    {
         return $this->searchTerm ? $this->em->getRepository(Music::class)->findBySearchTerm($this->searchTerm):[];
    }
}
