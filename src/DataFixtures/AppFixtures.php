<?php

namespace App\DataFixtures;

use App\Entity\Music;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $this->createFakerMusics($manager, 15);
    }

    private function createFakerMusics(ObjectManager$manager, int $nbMusic = 10): void
    {
        $faker = Factory::create('fr_FR');
        for($i=0; $i <= $nbMusic; $i++){
            $entity = (new Music())
                ->setTitle($faker->word())
                ->setArtist($faker->name())
                ->setInfo($faker->paragraph())
                ->setRating($faker->randomFloat(1, 1, 6))
                ->setVoting($faker->numberBetween(1, 10))
            ;
            $manager->persist($entity);
        }
        $manager->flush();
    }
}
