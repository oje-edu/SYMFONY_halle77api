<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE6Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e6m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('BMW')
            ->setType('120D')
            ->setHp(185)
            ->setPs2(198.9)
            ->setComment('Performance Paket');
        $manager->persist($e6m1);


        $e6m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Renault')
            ->setType('Clio 16V')
            ->setCcm(1.8)
            ->setHp(135)
            ->setPs2(141.2)
            ->setComment('Fächerkrümmer');
        $manager->persist($e6m2);


        $e6m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Mazda')
            ->setType(' RX-8')
            ->setCcm(1.3)
            ->setHp(231)
            ->setKm(157115)
            ->setYear(2004)
            ->setPs2(199.3)
            ->setComment('Wankelmotor');
        $manager->persist($e6m3);


        $e6m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Opel')
            ->setType('Astra (F) 16V')
            ->setCcm(1.8)
            ->setHp(115)
            ->setKm(396000)
            ->setPs2(121.6);
        $manager->persist($e6m4);


        $e6m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(1.8)
            ->setHp(125)
            ->setPs2(124.6);
        $manager->persist($e6m5);


        $e6m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Audi')
            ->setType('A2 (S-Line) 16V')
            ->setCcm(1.4)
            ->setHp(75)
            ->setKm(464568)
            ->setPs2(79.4);
        $manager->persist($e6m6);


        $e6m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Ford')
            ->setType('Taunus (20M P7)')
            ->setHp(90)
            ->setPs1(107.2)
            ->setPs2(108.5);
        $manager->persist($e6m7);


        $e6m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Seat')
            ->setType('Leon Cupra')
            ->setHp(285)
            ->setPs2(309.1);
        $manager->persist($e6m8);


        $e6m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('VW')
            ->setType('Passat (3B)')
            ->setCcm(1.9)
            ->setHp(116)
            ->setPs2(168.1);
        $manager->persist($e6m9);


        $e6m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Opel')
            ->setType('Adam (S)')
            ->setCcm(1.4)
            ->setHp(150)
            ->setPs1(141.4)
            ->setPs2(145.2)
            ->setComment('1. Messung mit Tuningbox');
        $manager->persist($e6m10);


        $e6m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('BMW')
            ->setType('(E46) 320d (Cabrio')
            ->setHp(150)
            ->setKm(250000)
            ->setPs2(152.5);
        $manager->persist($e6m11);


        $e6m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Ford')
            ->setType('Probe')
            ->setHp(147)
            ->setPs1(178.3)
            ->setPs2(149)
            ->setComment('2. Messung mit Serienladedruck');
        $manager->persist($e6m12);


        $e6m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('VW')
            ->setType('Polo')
            ->setCcm(1.3)
            ->setHp(55)
            ->setPs2(75.4);
        $manager->persist($e6m13);


        $e6m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Audi')
            ->setType('80 (B4) Coupe')
            ->setCcm(2.3)
            ->setHp(133)
            ->setPs1(92.1)
            ->setPs2(94.0);
        $manager->persist($e6m14);


        $e6m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode6'))
            ->setBrand('Ford')
            ->setType('Mondeo (ST220)')
            ->setHp(220)
            ->setPs1(185.9)
            ->setPs2(189.3);
        $manager->persist($e6m15);

        $manager->flush();

    }
}
