<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE17Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e17m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Audi')
            ->setType('A3 TDI Sportback')
            ->setCcm(2.0)
            ->setHp(140)
            ->setPs1(172.7)
            ->setPs2(171.5)
            ->setComment('Software');
        $manager->persist($e17m1);


        $e17m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Volvo')
            ->setType('244 GLT')
            ->setCcm(2.3)
            ->setHp(140)
            ->setPs2(132.4)
            ->setComment('100 Stück gebaut');
        $manager->persist($e17m2);


        $e17m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('VW')
            ->setType('Passat TDI')
            ->setCcm(1.9)
            ->setHp(110)
            ->setPs2(144.9)
            ->setComment('AFN Motor');
        $manager->persist($e17m3);


        $e17m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Ford')
            ->setType('Focus ST (Gen3)')
            ->setCcm(2.0)
            ->setHp(250)
            ->setPs2(250.0);
        $manager->persist($e17m4);


        $e17m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Ford')
            ->setType('Fiesta ST')
            ->setCcm(1.6)
            ->setHp(182)
            ->setPs2(196.9);
        $manager->persist($e17m5);


        $e17m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Ford')
            ->setType('Focus ST (Kombi)')
            ->setCcm(2.0)
            ->setHp(250)
            ->setPs1(239.4)
            ->setPs2(262.7);
        $manager->persist($e17m6);


        $e17m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('VW')
            ->setType('Golf VI GTD')
            ->setCcm(2.0)
            ->setHp(170)
            ->setPs1(196.6)
            ->setPs2(198.0);
        $manager->persist($e17m7);


        $e17m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Opel')
            ->setType('Vectra I500')
            ->setCcm(2.5)
            ->setHp(194)
            ->setPs1(178.2)
            ->setPs2(179.4);
        $manager->persist($e17m8);


        $e17m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Audi')
            ->setType('A4')
            ->setCcm(1.8)
            ->setHp(190)
            ->setPs1(180.3)
            ->setPs2(182.8)
            ->setComment('Software');
        $manager->persist($e17m9);


        $e17m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Audi')
            ->setType('A4 (B5)')
            ->setCcm(2.4)
            ->setHp(165)
            ->setPs1(177.3)
            ->setPs2(177.2);
        $manager->persist($e17m10);


        $e17m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('VW')
            ->setType('Käfer 1302')
            ->setCcm(1.3)
            ->setHp(44)
            ->setPs2(53.2)
            ->setComment('Wahrscheinlich 1.6er');
        $manager->persist($e17m11);


        $e17m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Ford')
            ->setType('Fiesta ST 200')
            ->setCcm(1.6)
            ->setHp(200)
            ->setPs1(200.7)
            ->setPs2(209.6);
        $manager->persist($e17m12);


        $e17m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Seat')
            ->setType('Leon Cupra')
            ->setCcm(2.0)
            ->setHp(280)
            ->setPs2(350.1)
            ->setComment('Software');
        $manager->persist($e17m13);


        $e17m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Seat')
            ->setType('Leon Cupra')
            ->setCcm(2.0)
            ->setHp(280)
            ->setKm(133000)
            ->setPs1(291.0)
            ->setPs2(295.9);
        $manager->persist($e17m14);


        $e17m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('VW')
            ->setType('Golf III VR6')
            ->setCcm(2.8)
            ->setHp(174)
            ->setPs1(173.1)
            ->setPs2(176.2)
            ->setComment('2. Messung mit offener Motorhaube');
        $manager->persist($e17m15);


        $e17m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Renault')
            ->setType('Clio 16V')
            ->setCcm(1.8)
            ->setHp(135)
            ->setPs1(134.1)
            ->setPs2(134.7)
            ->setComment('2. Messung mit original Steuergerät');
        $manager->persist($e17m16);


        $e17m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Renault')
            ->setType('Clio Sport 16V')
            ->setCcm(2.0)
            ->setHp(169)
            ->setPs2(164.3);
        $manager->persist($e17m17);


        $e17m18 = (new Car())
            ->setCarNr(18)
            ->setEpisodeNr($this->getReference('episode17'))
            ->setBrand('Renault')
            ->setType('Clio Sport 16V')
            ->setCcm(2.0)
            ->setHp(168)
            ->setPs2(182.3)
            ->setComment('Megane Motor');
        $manager->persist($e17m18);

        $manager->flush();

    }
}
