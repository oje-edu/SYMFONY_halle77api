<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE45Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e45m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('Mini')
            ->setType('Cooper')
            ->setCcm(1.6)
            ->setHp(116)
            ->setKm(156.246)
            ->setYear(2002)
            ->setPs2(126.2);
        $manager->persist($e45m1);


        $e45m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('VW')
            ->setType('Polo (6N1)')
            ->setCcm(1.4)
            ->setHp(60)
            ->setPs1(73.2)
            ->setPs2(74.2)
            ->setComment('Käfig) Fächerkrümmer');
        $manager->persist($e45m2);


        $e45m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('VW')
            ->setType('Golf IV Turbo')
            ->setCcm(1.8)
            ->setHp(200)
            ->setPs2(218.0)
            ->setComment('K03 (1.0 Bar)');
        $manager->persist($e45m3);


        $e45m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('BMW')
            ->setType('(E39)528i')
            ->setCcm(2.8)
            ->setHp(193)
            ->setKm(337000)
            ->setPs2(191.5);
        $manager->persist($e45m4);


        $e45m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('Volvo')
            ->setType('C70 Coupe')
            ->setHp( 239)
            ->setKm(129996)
            ->setPs2(230.8);
        $manager->persist($e45m5);


        $e45m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('Volvo')
            ->setType('850 (T5)')
            ->setHp(252)
            ->setPs1(219.8)
            ->setPs2(196.2);
        $manager->persist($e45m6);


        $e45m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode45'))
            ->setBrand('Pontiac')
            ->setType('Sunbird T')
            ->setCcm(2.0)
            ->setHp(165)
            ->setYear(1988)
            ->setPs2(181.6)
            ->setComment('Cabrio) TOP TEIL');
        $manager->persist($e45m7);

        $manager->flush();
    }
}
