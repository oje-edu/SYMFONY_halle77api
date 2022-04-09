<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE44Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e44m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode44'))
            ->setBrand('Seat')
            ->setType('Toledo')
            ->setCcm(1.6)
            ->setHp(101)
            ->setKm(83000)
            ->setPs1(101.3)
            ->setPs2(102.7)
            ->setComment('Kaufpreis 1.700 bei 63.000km');
        $manager->persist($e44m1);


        $e44m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode44'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(75)
            ->setKm(105009)
            ->setPs2(120.1)
            ->setComment('Motor) Nockenwelle usw. Custom');
        $manager->persist($e44m2);


        $e44m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode44'))
            ->setBrand('BMW')
            ->setType('(E39) 528 24V')
            ->setCcm(2.8)
            ->setHp(193)
            ->setKm(307241)
            ->setPs2(189.0)
            ->setComment('Scharfe Nockenwelle) Alpina Software');
        $manager->persist($e44m3);


        $e44m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode44'))
            ->setBrand('VW')
            ->setType('Lupo')
            ->setCcm(1.0)
            ->setHp(50)
            ->setKm(158698)
            ->setPs2(54.7);
        $manager->persist($e44m4);

        $manager->flush();
    }
}
