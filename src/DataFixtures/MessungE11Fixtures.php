<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE11Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $manager->flush();

    }
}
