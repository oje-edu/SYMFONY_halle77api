<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE11Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e11m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('VW')
            ->setType('Polo I')
            ->setCcm(1.6)
            ->setHp(120)
            ->setPs2(144.7)
            ->setComment('16V (6N Motor)');
        $manager->persist($e11m1);;


        $e11m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('VW')
            ->setType('Golf IV GTI 20V')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs2(217.3);
        $manager->persist($e11m2);


        $e11m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('VW')
            ->setType('Golf II G60')
            ->setPs1(197.5);
        $manager->persist($e11m3);


        $e11m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('BMW')
            ->setType('(E46) 330ci')
            ->setCcm(3.0)
            ->setHp(231)
            ->setPs2(225.3);
        $manager->persist($e11m4);


        $e11m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('VW')
            ->setType('Bora VR5')
            ->setCcm(2.3)
            ->setHp(150)
            ->setPs2(152.2);
        $manager->persist($e11m5);


        $e11m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('BMW')
            ->setType('Z4')
            ->setCcm(3.0)
            ->setHp(231)
            ->setKm(76000)
            ->setPs1(231.6)
            ->setPs2(235.7);
        $manager->persist($e11m6);


        $e11m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Opel')
            ->setType('Kadett (E) GSI 16V')
            ->setPs1(281.4)
            ->setPs2(274.5)
            ->setComment('Calibra Turbo Motor');
        $manager->persist($e11m7);


        $e11m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Audi')
            ->setType('A3 TDI')
            ->setCcm(1.9)
            ->setHp(90)
            ->setPs2(129.3);
        $manager->persist($e11m8);


        $e11m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Renault')
            ->setType('19 (Cabrio)')
            ->setCcm(1.8)
            ->setHp(88)
            ->setYear(1992)
            ->setPs1(88.5)
            ->setPs2(91.2);
        $manager->persist($e11m9);


        $e11m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('VW')
            ->setType('Vento')
            ->setCcm(1.6)
            ->setHp(75)
            ->setKm(214000)
            ->setPs2(80.1);
        $manager->persist($e11m10);


        $e11m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Opel')
            ->setType('Kadett (E) GSI 16V')
            ->setHp(150)
            ->setPs2(148.5);
        $manager->persist($e11m11);


        $e11m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Audi')
            ->setType('90')
            ->setCcm(2.3)
            ->setHp(136)
            ->setPs1(120.4)
            ->setPs2(121.7);
        $manager->persist($e11m12);


        $e11m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('BMW')
            ->setType('(E92) 330')
            ->setCcm(3.0)
            ->setHp(281)
            ->setPs2(242.6);
        $manager->persist($e11m13);


        $e11m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Skoda')
            ->setType('Octavia RS TFSI')
            ->setHp(200)
            ->setPs1(220.9)
            ->setPs2(226.3)
            ->setComment('Tuningbox');
        $manager->persist($e11m14);


        $e11m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Caterham')
            ->setHp(160)
            ->setPs2(165.5);
        $manager->persist($e11m15);


        $e11m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode11'))
            ->setBrand('Ford')
            ->setType('Fiesta MK-I')
            ->setCcm(0.9)
            ->setHp(39)
            ->setPs2(40.9)
            ->setComment('Nadines Auto) (ultra geile farbe)');
        $manager->persist($e11m16);

        $manager->flush();

    }
}
