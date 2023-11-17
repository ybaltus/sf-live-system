<?php

namespace App\Twig\Components;

use App\Entity\Music;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveArg;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent()]
final class MusicVoteComponent
{
    use DefaultActionTrait;

    #[LiveProp]
    public Music $music;

    public function __construct(
        private EntityManagerInterface $em
    )
    {
    }

    #[LiveAction]
    public function vote(#[LiveArg] string $direction)
    {
        if($direction === 'up'){
            $this->music->setVoting($this->music->getVoting()+1);
        }else{
            $this->music->setVoting($this->music->getVoting()-1);
        }

        $this->em->flush();
    }
}
