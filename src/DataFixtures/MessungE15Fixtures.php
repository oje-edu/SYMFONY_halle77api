<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE15Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e15m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Toyota')
            ->setType('Corolla TS')
            ->setHp(192)
            ->setPs2(180.0);
        $manager->persist($e15m1);


        $e15m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Mitsubishi')
            ->setType('Eclipse')
            ->setHp(214)
            ->setYear(1996)
            ->setPs1(469.7)
            ->setPs2(478.7)
            ->setComment('Turbo Umbau) ALTAA!!!');
        $manager->persist($e15m2);


        $e15m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Audi')
            ->setType('A3 Sportback')
            ->setCcm(1.9)
            ->setHp(105)
            ->setKm(177000)
            ->setPs2(109.2);
        $manager->persist($e15m3);


        $e15m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Audi')
            ->setType('Coupe')
            ->setCcm(2.2)
            ->setHp(115)
            ->setPs1(130.2)
            ->setPs2(127.1)
            ->setComment('Nockenwelle');
        $manager->persist($e15m4);


        $e15m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Honda')
            ->setType('Accort VTEC')
            ->setCcm(2.4)
            ->setHp(190)
            ->setPs2(195.6);
        $manager->persist($e15m5);


        $e15m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Volvo')
            ->setType('V70')
            ->setCcm(2.4)
            ->setHp(185)
            ->setPs2(205.2);
        $manager->persist($e15m6);


        $e15m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(98)
            ->setPs2(107.4);
        $manager->persist($e15m7);


        $e15m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('M5')
            ->setCcm(5.0)
            ->setHp(400)
            ->setKm(353000)
            ->setPs2(369.8);
        $manager->persist($e15m8);


        $e15m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Jaguar')
            ->setType('XJ Sovereign')
            ->setCcm(4.2)
            ->setHp(204)
            ->setPs2(144.1)
            ->setComment('Rechtslenker');
        $manager->persist($e15m9);


        $e15m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Opel')
            ->setType('Ampera')
            ->setHp(151)
            ->setPs2(167.9)
            ->setComment('Marcos Auto (Radleistung)');
        $manager->persist($e15m10);


        $e15m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('Audi')
            ->setType('100 (Typ 44) Avant')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(89.6);
        $manager->persist($e15m11);


        $e15m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('(E30) 325i Cabrio')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs2(165.1);
        $manager->persist($e15m12);


        $e15m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('(E39) M5')
            ->setCcm(5.0)
            ->setHp(400)
            ->setKm(240000)
            ->setPs1(349.1)
            ->setPs2(356.5);
        $manager->persist($e15m13);


        $e15m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('(E36) 318ti')
            ->setCcm(1.8)
            ->setHp(140)
            ->setKm(353000)
            ->setPs2(121.9);
        $manager->persist($e15m14);


        $e15m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('135i')
            ->setCcm(3.5)
            ->setHp(306)
            ->setPs2(418.8)
            ->setComment('Biturbo) Software Krass!!');
        $manager->persist($e15m15);


        $e15m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('M5')
            ->setCcm(5.0)
            ->setHp(400)
            ->setKm(63000)
            ->setPs2(366.1);
        $manager->persist($e15m16);


        $e15m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode15'))
            ->setBrand('BMW')
            ->setType('Alpina B10')
            ->setCcm(3.2)
            ->setHp(260)
            ->setKm(180000)
            ->setYear(1998)
            ->setPs2(248.5);
        $manager->persist($e15m17);

        $manager->flush();

    }
}
