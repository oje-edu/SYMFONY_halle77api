<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE14Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e14m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Ford')
            ->setType('Escord MK-IV')
            ->setCcm(1.3)
            ->setHp(60)
            ->setPs2(65.9);
        $manager->persist($e14m1);

        $e14m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Audi')
            ->setType('A4 (B5)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs2(161.0)
            ->setComment('Soft Software');
        $manager->persist($e14m2);

        $e14m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('BMW')
            ->setType('(E46) 330i Touring')
            ->setCcm(3.0)
            ->setHp(231)
            ->setKm(125000)
            ->setPs1(206.6)
            ->setPs2(215.3)
            ->setComment('Edition 33');
        $manager->persist($e14m3);

        $e14m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Volvo')
            ->setType('V40 T4')
            ->setCcm(1.9)
            ->setHp(200)
            ->setYear(1999)
            ->setPs2(159.2);
        $manager->persist($e14m4);

        $e14m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Opel')
            ->setType('Ascona (A)')
            ->setCcm(2.4)
            ->setHp(125)
            ->setPs2(145.9)
            ->setComment('Einspritzer) Nockenwelle');
        $manager->persist($e14m5);

        $e14m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Ford')
            ->setType('Focus ST')
            ->setHp(280)
            ->setPs2(292.7);
        $manager->persist($e14m6);

        $e14m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Audi')
            ->setType('80')
            ->setPs1(122.6)
            ->setPs2(123.1)
            ->setComment('2. Messung mit neuen Zündkerzen');
        $manager->persist($e14m7);

        $e14m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Audi')
            ->setType('80')
            ->setPs1(125.6)
            ->setPs2(124.1)
            ->setComment('Nockenwelle) Krümmer');
        $manager->persist($e14m8);


        $e14m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Mercedes')
            ->setType('(W201) 190E 16V')
            ->setCcm(2.3)
            ->setHp(170)
            ->setPs1(156.9)
            ->setPs2(155.5);
        $manager->persist($e14m9);

        $e14m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Opel')
            ->setType('Kadett (C) Coupe')
            ->setCcm(2.4)
            ->setHp(150)
            ->setPs2(187.9);
        $manager->persist($e14m10);

        $e14m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('VW')
            ->setType('Golf VII GTI')
            ->setPs1(356.0)
            ->setPs2(352.2);
        $manager->persist($e14m11);

        $e14m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Peugeot')
            ->setType('106 XSI (LeMans)')
            ->setHp(94)
            ->setPs2(94.3);
        $manager->persist($e14m12);

        $e14m13 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Audi')
            ->setType('A4')
            ->setCcm(1.8)
            ->setPs1(102.6)
            ->setPs2(133.2)
            ->setComment('1. Messung Luftmassenmesser defekt');
        $manager->persist($e14m13);

        $e14m14 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('BMW')
            ->setType('(E91) 330i')
            ->setCcm(3.0)
            ->setHp(258)
            ->setPs1(219.8)
            ->setPs2(239.0);
        $manager->persist($e14m14);

        $e14m15 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('BMW')
            ->setType('(E46) 323i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs1(174.4)
            ->setPs2(178.6)
            ->setComment('1. Messung mit Klimaanlage');
        $manager->persist($e14m15);

        $e14m16 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Ford')
            ->setType('Fiesta')
            ->setCcm(1.1)
            ->setHp(53)
            ->setPs2(55.2)
            ->setComment('Halle 77 Auto');
        $manager->persist($e14m16);

        $e14m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode14'))
            ->setBrand('Audi')
            ->setType('Coupe')
            ->setCcm(2.3)
            ->setHp(136)
            ->setPs1(111.8)
            ->setPs2(115.7);
        $manager->persist($e14m17);

        $manager->flush();

    }
}
