<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE39Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e39m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('VW')
            ->setType('Golf I Turbo')
            ->setCcm(1.8)
            ->setHp(160)
            ->setPs1(184.5)
            ->setPs2(187.6)
            ->setComment('1.2 Bar');
        $manager->persist($e39m1);


        $e39m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('Mini')
            ->setType('R58 Turbo Coupe (JCW)')
            ->setCcm(1.6)
            ->setHp(211)
            ->setKm(130630)
            ->setPs2(250.0)
            ->setComment('Software)Downpipe)Turbolader) Krümmer ….');
        $manager->persist($e39m2);


        $e39m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('VW')
            ->setType('Golf II')
            ->setCcm(1.6)
            ->setHp(69)
            ->setYear(1976)
            ->setPs2(54.4);
        $manager->persist($e39m3);


        $e39m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('Opel')
            ->setType('Kadett (C) Caravan')
            ->setCcm(2.0)
            ->setHp(110)
            ->setPs2(126.0)
            ->setComment('Einfach ein Brett von Auto!');
        $manager->persist($e39m4);


        $e39m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('VW')
            ->setType('T4')
            ->setCcm(2.8)
            ->setHp(140)
            ->setKm(401227)
            ->setPs2(132.5)
            ->setComment('VR6');
        $manager->persist($e39m5);


        $e39m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('VW')
            ->setType('Passat (3B) VR5')
            ->setHp(150)
            ->setKm(390000)
            ->setPs2(149.6)
            ->setComment('10V (Kaufpreis 250€)');
        $manager->persist($e39m6);


        $e39m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('BMW')
            ->setType('(E34) 520i')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs1(144.2)
            ->setPs2(144.7);
        $manager->persist($e39m7);


        $e39m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('Opel')
            ->setType('Astra (F) Caravan')
            ->setCcm(1.6)
            ->setHp(204)
            ->setKm(188182)
            ->setPs2(245.7);
        $manager->persist($e39m8);


        $e39m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('BMW')
            ->setType('(E46) 320d')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(275135)
            ->setYear(2005)
            ->setPs2(188.0);
        $manager->persist($e39m9);


        $e39m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('BMW')
            ->setType('(E39) 523i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setKm(147121)
            ->setPs2(175.8);
        $manager->persist($e39m10);


        $e39m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('BMW')
            ->setType('(E36) 323i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setKm(226740)
            ->setPs1(178.3)
            ->setPs2(181.2)
            ->setComment('Kaufpreis 800€');
        $manager->persist($e39m11);


        $e39m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode39'))
            ->setBrand('Mazda')
            ->setType('626 GD')
            ->setCcm(2.0)
            ->setHp(90)
            ->setKm(101523)
            ->setPs2(98.5)
            ->setComment('8V (Kaufpreis 1.200€ bei 65.000km vor 6 1/2 Jahren)');
        $manager->persist($e39m12);

        $manager->flush();
    }
}
