<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE27Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e27m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('VW')
            ->setType('Corrado VSR')
            ->setCcm(2.9)
            ->setHp(190)
            ->setPs2(183.9)
            ->setComment('Ansaugbrücke');
        $manager->persist($e27m1);


        $e27m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('VW')
            ->setType('Golf III VR6')
            ->setCcm(2.8)
            ->setHp(174)
            ->setPs2(170.2);
        $manager->persist($e27m2);


        $e27m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('VW')
            ->setType('Golf IV')
            ->setCcm(2.0)
            ->setHp(115)
            ->setYear(2002)
            ->setPs2(104.4);
        $manager->persist($e27m3);


        $e27m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Mercedes')
            ->setType('(C124) 300 CE')
            ->setCcm(3.0)
            ->setHp(180)
            ->setKm(150000)
            ->setPs1(172.8);
        $manager->persist($e27m4);


        $e27m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('VW')
            ->setType('Polo (86C) GT Steilheck')
            ->setCcm(1.3)
            ->setHp(75)
            ->setPs1(71.6)
            ->setPs2(73.3);
        $manager->persist($e27m5);


        $e27m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('BMW')
            ->setType('(E28) 528i')
            ->setCcm(2.8)
            ->setHp(184)
            ->setPs1(163.8)
            ->setPs2(162.6);
        $manager->persist($e27m6);


        $e27m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Mazda')
            ->setType('MX5')
            ->setCcm(1.6)
            ->setHp(118)
            ->setPs1(115.1)
            ->setPs2(115.6)
            ->setComment('US-Version');
        $manager->persist($e27m7);


        $e27m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Mercedes')
            ->setType('(W124) E 220 C')
            ->setCcm(2.2)
            ->setHp(150)
            ->setPs1(149.4)
            ->setPs2(153.5);
        $manager->persist($e27m8);


        $e27m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Volvo')
            ->setType('940 Turbo')
            ->setCcm(2.3)
            ->setHp(165)
            ->setPs2(145.0);
        $manager->persist($e27m9);


        $e27m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('BMW')
            ->setType('(E34) 525is')
            ->setCcm(2.5)
            ->setHp(192)
            ->setPs2(175.7);
        $manager->persist($e27m10);


        $e27m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Volvo')
            ->setType('V70 T5')
            ->setCcm(2.3)
            ->setHp(250)
            ->setPs2(210.6);
        $manager->persist($e27m11);


        $e27m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('VW')
            ->setType('Passat (35i) Facelift')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(114.4);
        $manager->persist($e27m12);


        $e27m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('VW')
            ->setType('Käfer 1600')
            ->setCcm(1.6)
            ->setHp(46)
            ->setPs1(53.2)
            ->setPs2(45.8)
            ->setComment('2. Messung mit Seriensteuergerät');
        $manager->persist($e27m13);


        $e27m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Cadillac')
            ->setType('ElDorado Cabrio')
            ->setCcm(4.6)
            ->setHp(305)
            ->setPs2(245);
        $manager->persist($e27m14);


        $e27m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode27'))
            ->setBrand('Audi')
            ->setType('80 2.0E')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs1(107.1)
            ->setPs2(108.6);
        $manager->persist($e27m15);

        $manager->flush();
    }
}
