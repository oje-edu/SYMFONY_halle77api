<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE18Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $manager->flush();
        $e18m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Ford')
            ->setType('Focus ST')
            ->setCcm(2.5)
            ->setHp(225)
            ->setPs1(234.4)
            ->setPs2(233.2);
        $manager->persist($e18m1);


        $e18m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setHp(104)
            ->setPs2(121.7);
        $manager->persist($e18m2);


        $e18m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Seat')
            ->setType('Leon Turbo')
            ->setCcm(1.4)
            ->setHp(155)
            ->setPs2(160.7);
        $manager->persist($e18m3);


        $e18m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('VW')
            ->setType('Golf V TDI')
            ->setCcm(2.0)
            ->setHp(140)
            ->setPs2(148.7)
            ->setComment('Ladeluftkühler');
        $manager->persist($e18m4);


        $e18m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('BMW')
            ->setType('(E36) 320 Clubsport')
            ->setCcm(2.0)
            ->setHp(160)
            ->setPs2(286.9)
            ->setComment('3.2 M-Motor) Einzeldrosselklappen) 321PS');
        $manager->persist($e18m5);


        $e18m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Nissan')
            ->setType('370 Z')
            ->setCcm(3.7)
            ->setHp(328)
            ->setPs1(388.5)
            ->setPs2(339.0);
        $manager->persist($e18m6);


        $e18m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Toyota')
            ->setType('GT 86')
            ->setCcm(2.0)
            ->setHp(205)
            ->setPs1(196.7)
            ->setPs2(196.2);
        $manager->persist($e18m7);


        $e18m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Ariel')
            ->setType('Atom')
            ->setCcm(2.0)
            ->setHp(250)
            ->setPs1(326.3)
            ->setPs2(139.4)
            ->setComment('Honda VTEC Motor Serienmässig (2. Lauf technischer Defekt)');
        $manager->persist($e18m8);


        $e18m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Audi')
            ->setType('90')
            ->setCcm(2.3)
            ->setHp(133)
            ->setKm(327000)
            ->setPs2(128.9);
        $manager->persist($e18m9);


        $e18m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Porsche')
            ->setType('997 S')
            ->setCcm(3.8)
            ->setHp(355)
            ->setKm(135000)
            ->setPs2(339);
        $manager->persist($e18m10);


        $e18m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Audi')
            ->setType('A3 FSI Sportback')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(307000)
            ->setPs2(142.1);
        $manager->persist($e18m11);


        $e18m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Volkswagen')
            ->setType('Käfer 1200')
            ->setCcm(1.2)
            ->setHp(34)
            ->setPs2(32.8);
        $manager->persist($e18m12);


        $e18m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('VW')
            ->setType('Golf I GTI 16V')
            ->setCcm(1.8)
            ->setHp(139)
            ->setPs2(130.8);
        $manager->persist($e18m13);


        $e18m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('VW')
            ->setType('Golf II VR6')
            ->setCcm(2.9)
            ->setHp(190)
            ->setPs1(177.2)
            ->setPs2(176.1)
            ->setComment('2. Messung mit Seriensteuergerät');
        $manager->persist($e18m14);


        $e18m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(98)
            ->setPs1(94.3)
            ->setPs2(95.6);
        $manager->persist($e18m15);


        $e18m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('BMW')
            ->setType('(E39) 540')
            ->setCcm(4.0)
            ->setHp(286)
            ->setPs2(297.0);
        $manager->persist($e18m16);


        $e18m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('BMW')
            ->setType('(E46) 525i Cabrio')
            ->setCcm(2.5)
            ->setHp(192)
            ->setPs2(187.2);
        $manager->persist($e18m17);


        $e18m18 = (new Car())
            ->setCarNr(18)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Honda')
            ->setType('Civic R')
            ->setPs1(397.3)
            ->setPs2(664.8)
            ->setComment('1. Messung Lowboost 0.6) 2. Messung Highboost 2.3');
        $manager->persist($e18m18);


        $e18m19 = (new Car())
            ->setCarNr(19)
            ->setEpisodeNr($this->getReference('episode18'))
            ->setBrand('Seat')
            ->setType('Leon Cupra')
            ->setCcm(2.0)
            ->setHp(300)
            ->setPs2(353.4);
        $manager->persist($e18m19);

        $manager->flush();
    }
}
