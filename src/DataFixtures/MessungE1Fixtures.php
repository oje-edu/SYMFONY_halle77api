<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE1Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $car = (new Car())
            ->setEpisodeNr($this->getReference('episode1'))
            ->setCarNr(1)
            ->setBrand('BMW')
            ->setType('(E36) 328i')
            ->setCcm(2.8)
            ->setHp(193)
            ->setPs2(196.4);
        $manager->persist($car);

        $car2 = (new Car())
            ->setEpisodeNr($this->getReference('episode1'))
            ->setCarNr(2)
            ->setBrand('VW')
            ->setType('Corrado G60')
            ->setCcm(1.8)
            ->setHp(160)
            ->setPs1(161.2)
            ->setPs2(162.9);
        $manager->persist($car2);

        $car3 = (new Car())
            ->setEpisodeNr($this->getReference('episode1'))
            ->setCarNr(3)
            ->setBrand('Ford')
            ->setType('Focus ST')
            ->setCcm(2.0)
            ->setHp(250)
            ->setPs1(268.3)
            ->setPs2(268.2)
            ->setComment('Ladeluftkühler, Downpipe');
        $manager->persist($car3);

        $car4 = (new Car())
            ->setEpisodeNr($this->getReference('episode1'))
            ->setCarNr(4)
            ->setBrand('VW')
            ->setType('Golf II GTI 16V')
            ->setCcm(1.8)
            ->setHp(139)
            ->setPs1(209.1)
            ->setPs2(208.0)
            ->setComment('Aufgebohrt auf 1.9 Liter, Nockenwellen, Einspritzungen');
        $manager->persist($car4);

        $car5 = (new Car())
            ->setEpisodeNr($this->getReference('episode1'))
            ->setCarNr(5)
            ->setBrand('VW')
            ->setType('Passat B2 (32B)')
            ->setCcm(1.6)
            ->setHp(85)
            ->setPs1(98.4)
            ->setPs2(96.9)
            ->setComment('Abgaskrümmer, 2. Messung ohne Luftfilter');
        $manager->persist($car5);

        $car6 = (new Car())
            ->setEpisodeNr($this->getReference('episode1'))
            ->setCarNr(6)
            ->setBrand('Toyota')
            ->setType('Celica')
            ->setCcm(1.8)
            ->setHp(116)
            ->setKm(325000)
            ->setPs1(109.7)
            ->setPs2(111.1)
            ->setComment('2. Motor ist 120.000 gelaufen');
        $manager->persist($car6);

        $manager->flush();

    }
}
