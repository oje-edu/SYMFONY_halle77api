<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE37Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e37m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('Audi')
            ->setType('A4 Avant')
            ->setCcm(2.4)
            ->setHp(193)
            ->setKm(157902)
            ->setYear(1997)
            ->setPs2(199.8);
        $manager->persist($e37m1);


        $e37m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('BMW')
            ->setType('(E39) 525i')
            ->setCcm(2.5)
            ->setHp(192)
            ->setKm(230.457)
            ->setYear(2001)
            ->setPs2(184.9)
            ->setComment('Alpina Software');
        $manager->persist($e37m2);


        $e37m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('Audi')
            ->setType('A4 Coupe')
            ->setHp(136)
            ->setYear(1998)
            ->setPs2(128.8);
        $manager->persist($e37m3);


        $e37m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('Ford')
            ->setType('Probe 16V')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(125000)
            ->setPs2(115.0);
        $manager->persist($e37m4);


        $e37m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('BMW')
            ->setType('(E36) 320i')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs1(131.9)
            ->setPs2(138.5);
        $manager->persist($e37m5);


        $e37m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('Opel')
            ->setType('Corsa (B)')
            ->setCcm(1.6)
            ->setHp(75)
            ->setKm(319175)
            ->setYear(1993)
            ->setPs2(81.2);
        $manager->persist($e37m6);


        $e37m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('BMW')
            ->setType('Z3 i Coupe')
            ->setCcm(3.0)
            ->setHp(231)
            ->setYear(2000)
            ->setPs2(181.1);
        $manager->persist($e37m7);


        $e37m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('Opel')
            ->setType('Ascona (A)')
            ->setCcm(2.4)
            ->setHp(161)
            ->setPs2(164.3);
        $manager->persist($e37m8);


        $e37m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode37'))
            ->setBrand('VW')
            ->setType('Polo (Harlekin)')
            ->setCcm(1.4)
            ->setHp(60)
            ->setPs2(56.5);
        $manager->persist($e37m9);

        $manager->flush();
    }
}
