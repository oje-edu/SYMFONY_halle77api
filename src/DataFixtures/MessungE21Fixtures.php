<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE21Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e21m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Mercedes')
            ->setType('(W245) B200 Cdi')
            ->setCcm(2.0)
            ->setHp(140)
            ->setPs2(148.1);
        $manager->persist($e21m1);


        $e21m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('VW')
            ->setType('Golf II GTI 16V')
            ->setCcm(1.8)
            ->setHp(139)
            ->setPs2(134.6);
        $manager->persist($e21m2);


        $e21m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Ford')
            ->setType('Escort MK-VII 16V')
            ->setCcm(1.6)
            ->setHp(90)
            ->setYear(1996)
            ->setPs2(97.5);
        $manager->persist($e21m3);


        $e21m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Seat')
            ->setType('Ibiza 16V')
            ->setCcm(1.4)
            ->setHp(86)
            ->setPs2(93.8);
        $manager->persist($e21m4);


        $e21m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Opel')
            ->setType('Corsa (E) OPC')
            ->setCcm(1.6)
            ->setHp(207)
            ->setPs2(217.7)
            ->setComment('Auspuffanlage');
        $manager->persist($e21m5);


        $e21m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Saab')
            ->setType('9-5 Aero Turbo')
            ->setCcm(2.3)
            ->setHp(250)
            ->setYear(2002)
            ->setPs1(216.7)
            ->setPs2(218.5)
            ->setComment('Software');
        $manager->persist($e21m6);


        $e21m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Peugeot')
            ->setType('206 RC 16V')
            ->setCcm(2.0)
            ->setHp(180)
            ->setYear(2004)
            ->setPs2(165.3);
        $manager->persist($e21m7);


        $e21m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Peugeot')
            ->setType('206 RC 16V')
            ->setCcm(2.0)
            ->setHp(180)
            ->setKm(180000)
            ->setYear(2004)
            ->setPs2(170.7);
        $manager->persist($e21m8);


        $e21m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Ford')
            ->setType('Focus ST 170 16V')
            ->setCcm(2.0)
            ->setHp(173)
            ->setPs2(165.6);
        $manager->persist($e21m9);


        $e21m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Dodge')
            ->setType('Charger')
            ->setCcm(5.7)
            ->setHp(370)
            ->setYear(2013)
            ->setPs2(362.7);
        $manager->persist($e21m10);


        $e21m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('Mercedes')
            ->setType('C250')
            ->setCcm(2.5)
            ->setHp(150)
            ->setPs1(188.4)
            ->setPs2(203.3);
        $manager->persist($e21m11);


        $e21m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('BMW')
            ->setType('(E30) 520i')
            ->setCcm(2.0)
            ->setHp(129)
            ->setKm(278749)
            ->setPs2(152.5);
        $manager->persist($e21m12);


        $e21m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode21'))
            ->setBrand('VW')
            ->setType('Scirocco 16V')
            ->setCcm(1.8)
            ->setHp(139)
            ->setPs2(141.3);
        $manager->persist($e21m13);

        $manager->flush();
    }
}
