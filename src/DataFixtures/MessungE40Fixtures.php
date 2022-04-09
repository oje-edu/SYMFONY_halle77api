<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE40Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e40m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('Opel')
            ->setType('Corsa (B)')
            ->setCcm(1.2)
            ->setHp(65)
            ->setKm(176915)
            ->setYear(1998)
            ->setPs2(69.7);
        $manager->persist($e40m1);


        $e40m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('VW')
            ->setType('T4 (Multivan)')
            ->setCcm(2.5)
            ->setHp(115)
            ->setKm(281615)
            ->setPs2(99.0);
        $manager->persist($e40m2);


        $e40m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('BMW')
            ->setType('(E9) 3.5csi')
            ->setCcm(3.5)
            ->setHp(180)
            ->setKm(17719)
            ->setYear(1973)
            ->setPs2(203.1);
        $manager->persist($e40m3);


        $e40m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('Renault')
            ->setType('Megane')
            ->setCcm(1.4)
            ->setHp(95)
            ->setKm(204357)
            ->setYear(2001)
            ->setPs1(96.9)
            ->setPs2(96.7);
        $manager->persist($e40m4);


        $e40m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('VW')
            ->setType('Golf III')
            ->setCcm(2.8)
            ->setHp(174)
            ->setYear(1992)
            ->setPs2(244.5)
            ->setComment('VR6 Turbo (0.7 Bar)');
        $manager->persist($e40m5);


        $e40m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('Volvo')
            ->setType('S60 Turbo')
            ->setCcm(2.4)
            ->setHp(200)
            ->setKm(108739)
            ->setPs2(221.6)
            ->setComment('Rechtslenker (Kaufpreis 2.500€)');
        $manager->persist($e40m6);


        $e40m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode40'))
            ->setBrand('BMW')
            ->setType('(E39) 525tds')
            ->setCcm(2.5)
            ->setHp(143)
            ->setKm(162079)
            ->setPs1(154.2)
            ->setPs2(123.5);
        $manager->persist($e40m7);

        $manager->flush();
    }
}
