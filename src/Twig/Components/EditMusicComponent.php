<?php

namespace App\Twig\Components;

use App\Entity\Music;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\ValidatableComponentTrait;
use Symfony\Component\Validator\Constraints as Assert;

#[AsLiveComponent()]
final class EditMusicComponent
{
    use DefaultActionTrait;
    use ValidatableComponentTrait;

    #[LiveProp(writable: ['title', 'info'])]
    #[Assert\Valid]
    public Music $music;

    public bool $isEdited = false;

    #[LiveAction]
    public function save(EntityManagerInterface $em){
        $this->validate();
        $this->isEdited = true;
        $em->flush();
    }
}
