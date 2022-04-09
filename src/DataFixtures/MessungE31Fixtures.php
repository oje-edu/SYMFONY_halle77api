<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE31Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e31m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Toyota')
            ->setType('Starlet (P9)')
            ->setCcm(1.3)
            ->setHp(75)
            ->setPs2(81.4);
        $manager->persist($e31m1);


        $e31m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Nissan')
            ->setType('Primera')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs1(151.3);
        $manager->persist($e31m2);


        $e31m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Nissan')
            ->setType('Bluebird (T72) Grand-Prix 16V')
            ->setCcm(1.8)
            ->setHp(129)
            ->setYear(1989)
            ->setPs1(119.9);
        $manager->persist($e31m3);


        $e31m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('VW')
            ->setType('Polo (2F) G40')
            ->setCcm(1.3)
            ->setPs2(137.0);
        $manager->persist($e31m4);


        $e31m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Fiat')
            ->setType('Coupe Turbo 20V')
            ->setCcm(2.5)
            ->setHp(410)
            ->setPs1(360.9)
            ->setPs2(467.1)
            ->setComment('2. Messung mit High-Boost');
        $manager->persist($e31m5);


        $e31m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Fiat')
            ->setType('Coupe Turbo 20V')
            ->setCcm(2.0)
            ->setHp(220)
            ->setPs2(253.1);
        $manager->persist($e31m6);


        $e31m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Fiat')
            ->setType('Coupe Turbo 20V')
            ->setCcm(2.0)
            ->setHp(220)
            ->setPs2(230.5);
        $manager->persist($e31m7);


        $e31m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Fiat')
            ->setType('Coupe Turbo 20V')
            ->setCcm(2.0)
            ->setHp(220)
            ->setPs1(220.5)
            ->setPs2(224.4);
        $manager->persist($e31m8);


        $e31m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Fiat')
            ->setType('Coupe Turbo 20V')
            ->setCcm(2.0)
            ->setHp(220)
            ->setPs1(366.6)
            ->setPs2(359.1);
        $manager->persist($e31m9);


        $e31m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Nissan')
            ->setType('Primera (P10) 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(160.5);
        $manager->persist($e31m10);


        $e31m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Opel')
            ->setType('Record (D)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs1(115.7)
            ->setPs2(107.9)
            ->setComment('2. Messung mit Gas');
        $manager->persist($e31m11);


        $e31m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Opel')
            ->setType('Calibra Last Edition 16V')
            ->setCcm(2.0)
            ->setHp(136)
            ->setPs2(133.5);
        $manager->persist($e31m12);


        $e31m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode31'))
            ->setBrand('Ford')
            ->setType('Sierra XR4i')
            ->setCcm(2.8)
            ->setHp(150)
            ->setPs2(137.3);
        $manager->persist($e31m13);

        $manager->flush();
    }
}
