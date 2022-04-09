<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE34Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e34m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Toyota')
            ->setType('Corolla (E11)')
            ->setCcm(1.6)
            ->setHp(110)
            ->setKm(225000)
            ->setPs2(107.7);
        $manager->persist($e34m1);


        $e34m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('VW')
            ->setType('Käfer 1200')
            ->setCcm(1.6)
            ->setHp(60)
            ->setYear(1970)
            ->setPs2(60.5)
            ->setComment('Aufgebort) stehender Doppelvergaser');
        $manager->persist($e34m2);


        $e34m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Ford')
            ->setType('Maverick 12V')
            ->setCcm(2.4)
            ->setHp(124)
            ->setKm(190000)
            ->setPs2(125.6);
        $manager->persist($e34m3);


        $e34m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('BMW')
            ->setType('(E36) 323i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs1(175.1)
            ->setPs2(177.1);
        $manager->persist($e34m4);


        $e34m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('VW')
            ->setType('Lupo 1.4 16V')
            ->setCcm(1.4)
            ->setHp(101)
            ->setKm(211427)
            ->setYear(1999)
            ->setPs2(95.6)
            ->setComment('Fächerkrümmer) Nockenwelle');
        $manager->persist($e34m5);


        $e34m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Seat')
            ->setType('Exeo ST D')
            ->setCcm(2.0)
            ->setHp(143)
            ->setKm(162910)
            ->setPs2(150.1);
        $manager->persist($e34m6);


        $e34m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('BMW')
            ->setType('(E39) 520i')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(141785)
            ->setPs2(153.7);
        $manager->persist($e34m7);


        $e34m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Ford')
            ->setType('Focus TDCI')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(215.3);
        $manager->persist($e34m8);


        $e34m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Mercedes')
            ->setType('(R107) SL560 Cabrio')
            ->setHp(230)
            ->setKm(111023)
            ->setPs2(218.4)
            ->setComment('US Import');
        $manager->persist($e34m9);


        $e34m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Audi')
            ->setType('90 (B3) Coupe 20V')
            ->setHp(170)
            ->setKm(46133)
            ->setPs2(158.7);
        $manager->persist($e34m10);


        $e34m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('Toyota')
            ->setType('GT86')
            ->setCcm(2.0)
            ->setHp(200)
            ->setPs1(187.5)
            ->setPs2(194.0)
            ->setComment('Boxer');
        $manager->persist($e34m11);


        $e34m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('BMW')
            ->setType('Z3 i Coupe')
            ->setCcm(2.8)
            ->setHp(193)
            ->setKm(275342)
            ->setYear(1999)
            ->setPs2(217.4)
            ->setComment('Nockenwelle) Auspuffanlage');
        $manager->persist($e34m12);


        $e34m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode34'))
            ->setBrand('VW')
            ->setType('T4 TD')
            ->setCcm(2.0)
            ->setHp(102)
            ->setKm(395432)
            ->setPs2(152.8);
        $manager->persist($e34m13);

        $manager->flush();
    }
}
