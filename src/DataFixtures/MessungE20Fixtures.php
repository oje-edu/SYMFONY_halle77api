<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE20Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e20m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('BMW')
            ->setType('(E36) 328i Coupe')
            ->setCcm(2.8)
            ->setHp(193)
            ->setPs2(187.0)
            ->setComment('Große (M50) Ansaugbrücke) Software');
        $manager->persist($e20m1);


        $e20m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('VW')
            ->setType('T3')
            ->setHp(128)
            ->setPs1(120.7)
            ->setPs2(121.4)
            ->setComment('Subaru Motor) Fächerkrümmer');
        $manager->persist($e20m2);


        $e20m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('VW')
            ->setType('Golf I GTI 16V')
            ->setCcm(1.8)
            ->setHp(129)
            ->setPs2(119.3)
            ->setComment('Elektronik vom PL');
        $manager->persist($e20m3);


        $e20m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('BMW')
            ->setType('Z4')
            ->setCcm(3.0)
            ->setHp(306)
            ->setPs2(393.3)
            ->setComment('Biturbo');
        $manager->persist($e20m4);


        $e20m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('VW')
            ->setType('Polo (6N1) GTI 16V')
            ->setCcm(1.6)
            ->setHp(120)
            ->setKm(299000)
            ->setPs2(128)
            ->setComment('Fächerkrümmer) Ansaugung');
        $manager->persist($e20m5);


        $e20m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('Mercedes')
            ->setType('(C107) 280SLC')
            ->setCcm(2.8)
            ->setHp(185)
            ->setPs2(160.6);
        $manager->persist($e20m6);


        $e20m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('VW')
            ->setType('Golf VI GTI (Edition 35)')
            ->setCcm(2.0)
            ->setHp(235)
            ->setPs2(269.7)
            ->setComment('Luftfiltersystem');
        $manager->persist($e20m7);


        $e20m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('Opel')
            ->setType('Calibra (C20XE) 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(109000)
            ->setPs2(151.2);
        $manager->persist($e20m8);


        $e20m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('Volvo')
            ->setType('850 Turbo')
            ->setCcm(2.5)
            ->setHp(144)
            ->setPs2(266.6);
        $manager->persist($e20m9);


        $e20m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode20'))
            ->setBrand('VW')
            ->setType('Golf I Cabriolet')
            ->setCcm(1.8)
            ->setHp(98)
            ->setPs2(101.3)
            ->setComment('Auspuffanlage) Fächerkrümmer) Sportkat');
        $manager->persist($e20m10);

        $manager->flush();
    }
}
