<?php

namespace App\DataFixtures;

use App\Entity\Announcement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AnnoucementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 12; $i++) {
            $announcement = new Announcement();
            $announcement->setTitle($faker->sentence())
                        ->setDescription($faker->sentence())
                        ->setCreatedAt(new \DateTimeImmutable())
                        ->setUpdatedAt(new \DateTimeImmutable())
                        ->setImage('https://placehold.co/600x400');

            $manager->persist($announcement);
        }

        $manager->flush();
    }
}
