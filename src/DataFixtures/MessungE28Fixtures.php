<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE28Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e28m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Golf II Madison')
            ->setCcm(1.6)
            ->setHp(69)
            ->setKm(78290)
            ->setYear(1990)
            ->setPs2(65.2);
        $manager->persist($e28m1);


        $e28m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Golf II GTI 20V Turbo')
            ->setCcm(1.8)
            ->setHp(150)
            ->setYear(1991)
            ->setPs2(211.9);
        $manager->persist($e28m2);


        $e28m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('Ford')
            ->setType('Escort XR3i Cabrio')
            ->setCcm(1.8)
            ->setHp(105)
            ->setPs2(92.0);
        $manager->persist($e28m3);


        $e28m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Scirocco')
            ->setCcm(1.6)
            ->setHp(75)
            ->setPs2(76.4);
        $manager->persist($e28m4);


        $e28m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Golf III')
            ->setCcm(1.4)
            ->setHp(60)
            ->setPs2(152.8)
            ->setComment('ABF 2.0 16V 150PS) Garlock-Chip');
        $manager->persist($e28m5);


        $e28m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Golf III Cabrio')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(115.2)
            ->setComment('Nockenwelle) Fächerkrümmer');
        $manager->persist($e28m6);


        $e28m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('Opel')
            ->setType('Corsa (A) Facelift')
            ->setCcm(1.2)
            ->setHp(45)
            ->setPs2(98.9);
        $manager->persist($e28m7);


        $e28m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('BMW')
            ->setType('(E39) 525d Touring')
            ->setCcm(2.5)
            ->setHp(163)
            ->setKm(290000)
            ->setPs2(159.4);
        $manager->persist($e28m8);


        $e28m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Golf IV GTI Jubi')
            ->setCcm(2.3)
            ->setHp(179)
            ->setPs2(192.7);
        $manager->persist($e28m9);


        $e28m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Polo G40')
            ->setCcm(1.3)
            ->setPs2(112.1);
        $manager->persist($e28m10);


        $e28m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('Volvo')
            ->setType('850 T5R')
            ->setCcm(2.3)
            ->setHp(226)
            ->setPs2(239.6);
        $manager->persist($e28m11);


        $e28m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('Opel')
            ->setType('Kadett (E) Cabrio')
            ->setCcm(1.6)
            ->setHp(75)
            ->setPs2(78.4);
        $manager->persist($e28m12);


        $e28m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('Saab')
            ->setType('900 Turbo')
            ->setCcm(2.0)
            ->setHp(160)
            ->setKm(300080)
            ->setYear(1991)
            ->setPs2(204.1);
        $manager->persist($e28m13);


        $e28m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode28'))
            ->setBrand('VW')
            ->setType('Passat (35i) VR6 Facelift')
            ->setCcm(2.8)
            ->setHp(174)
            ->setPs2(165.6);
        $manager->persist($e28m14);

        $manager->flush();
    }
}
