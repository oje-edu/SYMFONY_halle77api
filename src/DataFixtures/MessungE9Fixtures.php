<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE9Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e9m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Opel')
            ->setType('Ascona (B)')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs1(139.6)
            ->setPs2(141.3)
            ->setComment('Weber Doppelvergaser) Nockenwelle');
        $manager->persist($e9m1);


        $e9m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Audi')
            ->setType('90')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(67120)
            ->setPs2(124.7);
        $manager->persist($e9m2);


        $e9m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Opel')
            ->setType('Ascona (B)')
            ->setHp(90)
            ->setYear(1978)
            ->setPs2(97.6);
        $manager->persist($e9m3);


        $e9m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('BMW')
            ->setType('(E46) 330i Touring')
            ->setCcm(3.0)
            ->setHp(231)
            ->setPs1(213.7)
            ->setPs2(217.7);
        $manager->persist($e9m4);


        $e9m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Nissan')
            ->setType('200SX')
            ->setCcm(1.8)
            ->setHp(169)
            ->setPs1(193.6)
            ->setPs2(260.1)
            ->setComment('1. Messung mit Strassenzulassung) 2. Messung mit Rennstrecken abstimmung');
        $manager->persist($e9m5);


        $e9m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Audi')
            ->setType('90')
            ->setCcm(2.3)
            ->setHp(136)
            ->setPs2(133.9)
            ->setComment('Nockenwelle) Ansaugbrücke');
        $manager->persist($e9m6);


        $e9m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('VW')
            ->setType('Golf I Turbo (Cabriolet)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs2(232.8);
        $manager->persist($e9m7);


        $e9m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Opel')
            ->setType('Manta (A) GT/E')
            ->setCcm(2.0)
            ->setHp(110)
            ->setPs1(105.8)
            ->setPs2(110.9);
        $manager->persist($e9m8);


        $e9m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('VW')
            ->setType('Derby')
            ->setCcm(1.3)
            ->setPs2(133.6);
        $manager->persist($e9m9);


        $e9m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('VW')
            ->setType('Golf II (10 Millionen)')
            ->setCcm(1.8)
            ->setHp(90)
            ->setKm(150000)
            ->setPs2(89.6);
        $manager->persist($e9m10);


        $e9m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Opel')
            ->setType('Ascona (C) GLS')
            ->setCcm(1.6)
            ->setHp(75)
            ->setKm(46000)
            ->setPs1(69.2);
        $manager->persist($e9m11);


        $e9m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Toyota')
            ->setType('Hilux TD')
            ->setCcm(2.5)
            ->setHp(102)
            ->setPs1(99.4)
            ->setPs2(98.0)
            ->setComment('Tuningbox');
        $manager->persist($e9m12);


        $e9m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('Triumph')
            ->setType('Spitfire')
            ->setCcm(1.5)
            ->setHp(69)
            ->setPs2(70.3);
        $manager->persist($e9m13);


        $e9m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('VW')
            ->setType('Golf II 16V')
            ->setCcm(2.0)
            ->setHp(182)
            ->setKm(170000)
            ->setPs2(171.8)
            ->setComment('Öttinger');
        $manager->persist($e9m14);


        $e9m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('VW')
            ->setType('Golf III TDI')
            ->setPs1(133.9)
            ->setPs2(117)
            ->setComment('Radleistung');
        $manager->persist($e9m15);


        $e9m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('BMW')
            ->setType('(E30) 320is')
            ->setCcm(2.0)
            ->setHp(192)
            ->setPs2(171.1)
            ->setComment('Italo-M5');
        $manager->persist($e9m16);


        $e9m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode9'))
            ->setBrand('BMW')
            ->setType('320is')
            ->setCcm(2.0)
            ->setHp(192)
            ->setPs1(225.1)
            ->setPs2(211)
            ->setComment('Aufgebort auf 2.5l) Radleistung) 1.Messung mit Lüfter');
        $manager->persist($e9m17);

        $manager->flush();

    }
}
