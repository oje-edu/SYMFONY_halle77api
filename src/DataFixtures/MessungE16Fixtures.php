<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE16Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e16m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('VW')
            ->setType('Golf VII GTI')
            ->setCcm(2.0)
            ->setHp(245)
            ->setPs2(343);
        $manager->persist($e16m1);

        $e16m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Mazda')
            ->setType('MX 5 (Cabrio)')
            ->setCcm(1.8)
            ->setHp(130)
            ->setPs2(124.9);
        $manager->persist($e16m2);


        $e16m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Mazda')
            ->setType('RX 8')
            ->setCcm(1.3)
            ->setHp(193)
            ->setPs1(164.6)
            ->setPs2(165.5)
            ->setComment('Wankelmotor');
        $manager->persist($e16m3);


        $e16m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('VW')
            ->setType('Golf V GTI (Edition 30)')
            ->setCcm(2.0)
            ->setHp(230)
            ->setPs2(291.0);
        $manager->persist($e16m4);


        $e16m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Audi')
            ->setType('A3 TDI')
            ->setCcm(1.9)
            ->setHp(131)
            ->setPs2(164.5)
            ->setComment('Dieselpartikelfilter');
        $manager->persist($e16m5);


        $e16m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Ford')
            ->setType('Focus ST')
            ->setCcm(2.5)
            ->setHp(225)
            ->setPs2(242.4);
        $manager->persist($e16m6);


        $e16m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('VW')
            ->setType('T3')
            ->setCcm(2.1)
            ->setHp(112)
            ->setPs2(97.3);
        $manager->persist($e16m7);


        $e16m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Volvo')
            ->setType('C70')
            ->setCcm(2.4)
            ->setHp(235)
            ->setPs2(280);
        $manager->persist($e16m8);


        $e16m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Toyota')
            ->setType('Crown VVTI')
            ->setCcm(2.5)
            ->setHp(280)
            ->setPs1(282.9)
            ->setPs2(268.1)
            ->setComment('Radleistung) Rechtslenker');
        $manager->persist($e16m9);


        $e16m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Mini')
            ->setType('Cooper S')
            ->setCcm(1.6)
            ->setHp(163)
            ->setKm(204506)
            ->setPs2(179.0);
        $manager->persist($e16m10);


        $e16m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('BMW')
            ->setType('(E46) 320i')
            ->setCcm(2.0)
            ->setHp(170)
            ->setPs2(174.9);
        $manager->persist($e16m11);


        $e16m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('VW')
            ->setType('Lupo GTI')
            ->setCcm(1.6)
            ->setHp(125)
            ->setPs1(128.1)
            ->setPs2(132.9);
        $manager->persist($e16m12);


        $e16m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('BMW')
            ->setType('330d')
            ->setCcm(3.0)
            ->setHp(204)
            ->setPs2(312.1);
        $manager->persist($e16m13);


        $e16m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('Audi')
            ->setType('Coupe')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(232000)
            ->setPs2(124.5);
        $manager->persist($e16m14);


        $e16m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode16'))
            ->setBrand('VW')
            ->setType('Jetta TDI')
            ->setCcm(1.9)
            ->setHp(105)
            ->setKm(349000)
            ->setPs1(106.4)
            ->setPs2(107.4);
        $manager->persist($e16m15);

        $manager->flush();

    }
}
