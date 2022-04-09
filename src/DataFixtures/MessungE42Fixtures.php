<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE42Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e42m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('VW')
            ->setType('Golf III Yubi GTI 8V')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(352701)
            ->setYear(1996)
            ->setPs1(115.5)
            ->setPs2(114.8);
        $manager->persist($e42m1);


        $e42m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Audi')
            ->setType('80 (B3) 2.0E')
            ->setCcm(2.0)
            ->setKm(244467)
            ->setPs2(80.3);
        $manager->persist($e42m2);


        $e42m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Opel')
            ->setType('Kadett (C) City')
            ->setCcm(2.5)
            ->setHp(403)
            ->setPs1(217.8)
            ->setPs2(212.8)
            ->setComment('CIH Motor - 18.500€ Kaufpreis in Dänemark (2. Lauf Schalter runter) 0.5 Lowboost Laderdruck');
        $manager->persist($e42m3);


        $e42m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('VW')
            ->setType('Passat GL')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(80321)
            ->setPs2(107.7);
        $manager->persist($e42m4);


        $e42m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('BMW')
            ->setType('(E36) 325tds')
            ->setCcm(2.5)
            ->setHp(143)
            ->setPs2(156.6)
            ->setComment('1.5 Bar Ladedruck');
        $manager->persist($e42m5);


        $e42m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Audi')
            ->setType('100 CS (44)')
            ->setCcm(2.2)
            ->setHp(115)
            ->setKm(204928)
            ->setPs2(94.1);
        $manager->persist($e42m6);


        $e42m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Nissan')
            ->setType('300 ZX')
            ->setHp(170)
            ->setYear(2000)
            ->setPs2(149.9);
        $manager->persist($e42m7);


        $e42m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Lexus')
            ->setType('IS 200')
            ->setCcm(2.0)
            ->setHp(155)
            ->setKm(143000)
            ->setPs2(161.0);
        $manager->persist($e42m8);


        $e42m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('BMW')
            ->setType('(E34) 525')
            ->setCcm(2.5)
            ->setHp(192)
            ->setPs2(182.1)
            ->setComment('M50');
        $manager->persist($e42m9);


        $e42m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('BMW')
            ->setType('(E36) 320i')
            ->setCcm(2.0)
            ->setKm(224629)
            ->setPs2(149.1)
            ->setComment('Steuergerät');
        $manager->persist($e42m10);


        $e42m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Mitsubishi')
            ->setType('Space Wagon')
            ->setHp(122)
            ->setKm(277000)
            ->setPs1(122.0)
            ->setPs2(122.6);
        $manager->persist($e42m11);


        $e42m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode42'))
            ->setBrand('Opel')
            ->setType('Kadett (C) City')
            ->setCcm(2.5)
            ->setHp(403)
            ->setPs1(409.8)
            ->setPs2(388.1)
            ->setComment('Siehe (EpisodeNr 42) Nr 3 - 1.7 Bar Ladedruck (4. Lauf Schlauch abgeflogen)');
        $manager->persist($e42m12);

        $manager->flush();
    }
}
