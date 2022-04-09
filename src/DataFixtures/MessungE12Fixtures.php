<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE12Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e12m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Porsche')
            ->setType('944')
            ->setCcm(2.5)
            ->setHp(163)
            ->setPs1(146);
        $manager->persist($e12m1);


        $e12m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Ford')
            ->setType('Fiesta ST 200')
            ->setCcm(1.6)
            ->setHp(200)
            ->setPs2(210.8);
        $manager->persist($e12m2);


        $e12m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Opel')
            ->setType('Vectra (C)')
            ->setCcm(3.2)
            ->setHp(211)
            ->setPs2(216.3);
        $manager->persist($e12m3);


        $e12m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Audi')
            ->setType('TT (8N)')
            ->setCcm(1.8)
            ->setHp(180)
            ->setKm(300000)
            ->setPs2(162.3);
        $manager->persist($e12m4);


        $e12m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('VW')
            ->setType('Golf II')
            ->setCcm(2.8)
            ->setHp(204)
            ->setPs2(211.3);
        $manager->persist($e12m5);


        $e12m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('BMW')
            ->setType('(E36) 320')
            ->setHp(150)
            ->setPs1(137.2)
            ->setPs2(144.0)
            ->setComment('1. Messung auf Gas) 2. Messung auf Benzin');
        $manager->persist($e12m6);

        $e12m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(98)
            ->setPs1(104.5)
            ->setPs2(102.7);
        $manager->persist($e12m7);

        $e12m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Seat')
            ->setType('Leon Cupra')
            ->setHp(290)
            ->setPs2(345.5)
            ->setComment('Chiptuning');
        $manager->persist($e12m8);


        $e12m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Citroen')
            ->setType('C5')
            ->setHp(140)
            ->setPs1(138.4)
            ->setPs2(138.8);
        $manager->persist($e12m9);


        $e12m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Mercedes')
            ->setType('(W124) 190?')
            ->setCcm(2.0)
            ->setHp(136)
            ->setYear(1993)
            ->setPs2(143.4);
        $manager->persist($e12m10);


        $e12m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Ford')
            ->setType('Transit')
            ->setHp(170)
            ->setPs2(178.8);
        $manager->persist($e12m11);


        $e12m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Ford')
            ->setType('Focus RS')
            ->setCcm(2.5)
            ->setHp(305)
            ->setPs2(376.2);
        $manager->persist($e12m12);


        $e12m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode12'))
            ->setBrand('Volvo')
            ->setType('T5 R')
            ->setCcm(2.3)
            ->setHp(245)
            ->setPs2(250.6);
        $manager->persist($e12m13);
        $manager->flush();

    }
}
