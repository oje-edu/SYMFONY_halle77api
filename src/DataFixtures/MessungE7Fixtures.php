<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE7Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e7m1 = (new Car())
            ->setCarNr(1)
            ->setBrand('Audi')
            ->setType('Coupe (B2) 2.3E')
            ->setCcm(2.3)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(136)
            ->setPs1(123)
            ->setPs2(121.3);
        $manager->persist($e7m1);


        $e7m2 = (new Car())
            ->setCarNr(2)
            ->setBrand('BMW')
            ->setType('(E30) 325i')
            ->setCcm(2.5)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(170)
            ->setPs1(139.3)
            ->setPs2(140.8);
        $manager->persist($e7m2);


        $e7m3 = (new Car())
            ->setCarNr(3)
            ->setBrand('VW')
            ->setType('Käfer')
            ->setCcm(1.7)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(70)
            ->setPs2(64.3);
        $manager->persist($e7m3);


        $e7m4 = (new Car())
            ->setCarNr(4)
            ->setBrand('Opel')
            ->setType('Calibra')
            ->setCcm(2.5)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(170)
            ->setPs2(193.1);
        $manager->persist($e7m4);


        $e7m5 = (new Car())
            ->setCarNr(5)
            ->setBrand('Honda')
            ->setType('Civic VTEC')
            ->setCcm(1.8)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(190)
            ->setPs1(185)
            ->setPs2(184.2)
            ->setComment('1.Messung ohne Luftfilter) 2. Messung mit anderer Software');
        $manager->persist($e7m5);


        $e7m6 = (new Car())
            ->setCarNr(6)
            ->setBrand('BMW')
            ->setType('(E30) M3')
            ->setCcm(2.3)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(195)
            ->setPs1(193.4)
            ->setPs2(191.2);
        $manager->persist($e7m6);


        $e7m7 = (new Car())
            ->setCarNr(7)
            ->setBrand('Toyota')
            ->setType('MR2')
            ->setCcm(2.0)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(156)
            ->setPs1(161.4)
            ->setPs2(null)
            ->setComment('Fächerkrümmer');
        $manager->persist($e7m7);


        $e7m8 = (new Car())
            ->setCarNr(8)
            ->setBrand('Mitsubishi')
            ->setType('Lancer')
            ->setCcm(1.5)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setHp(90)
            ->setKm(850000)
            ->setPs1(84.9)
            ->setPs2(80.9)
            ->setComment('LPG Anlage) 2. Messung auf Gas');
        $manager->persist($e7m8);


        $e7m9 = (new Car())
            ->setCarNr(9)
            ->setBrand('VW')
            ->setType('T4 (Syncro) Turbo')
            ->setHp(180)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setPs2(151.9)
            ->setComment('Öttinger');
        $manager->persist($e7m9);


        $e7m10 = (new Car())
            ->setCarNr(10)
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setHp(125)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setPs1(119.0)
            ->setPs2(117.8);
        $manager->persist($e7m10);


        $e7m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('VW')
            ->setType('Golf II GTI 16V')
            ->setCcm(1.8)
            ->setHp(139)
            ->setKm(167000)
            ->setPs2(141.4);
        $manager->persist($e7m11);


        $e7m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('Saab')
            ->setType('95')
            ->setCcm(2.3)
            ->setHp(250)
            ->setPs1(201.8)
            ->setPs2(227.5)
            ->setComment('1. Messung self coded Cruisemode');
        $manager->persist($e7m12);


        $e7m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('BMW')
            ->setType('323Ti')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs1(173.9)
            ->setPs2(174.6)
            ->setComment('Original 316i (Compact)');
        $manager->persist($e7m13);


        $e7m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('VW')
            ->setType('Golf II VR6')
            ->setCcm(2.8)
            ->setHp(174)
            ->setPs2(184.4);
        $manager->persist($e7m14);


        $e7m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('BMW')
            ->setType('(E46) 330i')
            ->setCcm(3.0)
            ->setHp(231)
            ->setKm(234000)
            ->setPs1(205.8)
            ->setPs2(212.3);
        $manager->persist($e7m15);


        $e7m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('Volvo')
            ->setType('850 T5-R')
            ->setCcm(2.5)
            ->setHp(240)
            ->setPs1(238.9)
            ->setPs2(249.1);
        $manager->persist($e7m16);


        $e7m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode7'))
            ->setBrand('Audi')
            ->setType('80')
            ->setCcm(2.0)
            ->setHp(116)
            ->setPs1(104.7)
            ->setPs2(106.5);
        $manager->persist($e7m17);

        $manager->flush();

    }
}
