<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE25Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e25m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Mercedes')
            ->setType('(W201) 190E Sportline')
            ->setCcm(2.3)
            ->setHp(132)
            ->setPs2(130.3);
        $manager->persist($e25m1);


        $e25m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Mercedes')
            ->setType('(W210) 300TD')
            ->setCcm(3.0)
            ->setHp(177)
            ->setKm(250000)
            ->setPs1(171.5)
            ->setPs2(173.3)
            ->setComment('2. Messung ohne Klimaanlage');
        $manager->persist($e25m2);


        $e25m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('BMW')
            ->setType('(E36) 318is Coupe')
            ->setCcm(1.8)
            ->setHp(140)
            ->setPs2(139.6);
        $manager->persist($e25m3);


        $e25m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Mercedes')
            ->setType('(W210) E 55 AMG')
            ->setCcm(5.5)
            ->setHp(354)
            ->setKm(128000)
            ->setPs1(312.6)
            ->setPs2(315.3);
        $manager->persist($e25m4);


        $e25m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('BMW')
            ->setType('(E34) 525i Touring')
            ->setCcm(2.5)
            ->setHp(192)
            ->setPs2(187.6);
        $manager->persist($e25m5);


        $e25m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('VW')
            ->setType('Golf II GT Special')
            ->setCcm(1.8)
            ->setHp(90)
            ->setPs2(140.2)
            ->setComment('Golf III 2.0 16V 150PS');
        $manager->persist($e25m6);


        $e25m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('VW')
            ->setType('T2 (B)')
            ->setCcm(2.0)
            ->setHp(70)
            ->setYear(1977)
            ->setPs2(56.8);
        $manager->persist($e25m7);


        $e25m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Audi')
            ->setType('80 Cabrio')
            ->setCcm(2.0)
            ->setHp(115)
            ->setYear(1996)
            ->setPs2(112.9);
        $manager->persist($e25m8);


        $e25m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Opel')
            ->setType('Vectra (A)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(111.8);
        $manager->persist($e25m9);


        $e25m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('BMW')
            ->setType('(E32) 730')
            ->setCcm(3.0)
            ->setHp(218)
            ->setKm(137000)
            ->setPs2(208.4);
        $manager->persist($e25m10);


        $e25m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Opel')
            ->setType('Vectra (A)')
            ->setCcm(1.6)
            ->setHp(75)
            ->setPs2(76.9);
        $manager->persist($e25m11);


        $e25m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Audi')
            ->setType('A6 T')
            ->setCcm(1.8)
            ->setHp(150)
            ->setYear(1997)
            ->setPs1(156.0)
            ->setPs2(156.0)
            ->setComment('2. Messung mit offener Motorhaube');
        $manager->persist($e25m12);


        $e25m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Audi')
            ->setType('A4 (B5) T')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs1(130.5)
            ->setPs2(141.4);
        $manager->persist($e25m13);


        $e25m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('Audi')
            ->setType('Coupe 20V')
            ->setCcm(2.3)
            ->setHp(170)
            ->setKm(246000)
            ->setPs2(152.2);
        $manager->persist($e25m14);


        $e25m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode25'))
            ->setBrand('BMW')
            ->setType('(E36) 328')
            ->setCcm(2.8)
            ->setHp(193)
            ->setPs2(204.4)
            ->setComment('Ansaugbrücke) Krümmer) 0815 Software');
        $manager->persist($e25m15);

        $manager->flush();
    }
}
