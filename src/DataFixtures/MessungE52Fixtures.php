<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE52Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e52m1 =(new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('BMW')
            ->setType('730i')
            ->setCcm(3.0)
            ->setHp(188)
            ->setPs2(183.7);
        $manager->persist($e52m1);

        $e52m2 =(new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('BMW')
            ->setType('(E46) 330i')
            ->setCcm(3.0)
            ->setHp(231)
            ->setKm(236298)
            ->setPs2(241.6);
        $manager->persist($e52m2);

        $e52m3 =(new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('VW')
            ->setType('Polo 86C (2F) Fantasy')
            ->setCcm(1.0)
            ->setHp(45)
            ->setKm(71151)
            ->setYear(1993)
            ->setPs2(41.0);
        $manager->persist($e52m3);

        $e52m4 =(new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('Opel')
            ->setType('Calibra 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(159354)
            ->setPs1(144.5)
            ->setPs2(144.3);
        $manager->persist($e52m4);

        $e52m5 =(new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('VW')
            ->setType('Golf III VR6')
            ->setCcm(2.8)
            ->setHp(174)
            ->setKm(214393)
            ->setYear(1995)
            ->setPs2(177.0);
        $manager->persist($e52m5);

        $e52m6 =(new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('VW')
            ->setType('Golf III Variant TD')
            ->setCcm(1.8)
            ->setHp(90)
            ->setKm(295801)
            ->setPs1(104.3)
            ->setPs2(106.5)
            ->setComment('Chiptuning) Injektoren');
        $manager->persist($e52m6);

        $e52m7 =(new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('Opel')
            ->setType('Ascona (C) GT Sport')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(120.4)
            ->setComment('Lexmaul) Nockenwelle) Ansaugung) Fächerkrümmer  etc.');
        $manager->persist($e52m7);

        $e52m8 =(new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('Mercedes')
            ->setType('(W201) 190D')
            ->setCcm(2.5)
            ->setHp(90)
            ->setKm(432758)
            ->setYear(1986)
            ->setPs2(85.6);
        $manager->persist($e52m8);

        $e52m9 =(new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('BMW')
            ->setType('Z3')
            ->setCcm(2.8)
            ->setHp(193)
            ->setYear(1998)
            ->setPs2(188.9);
        $manager->persist($e52m9);

        $e52m10 =(new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('BMW')
            ->setType('(E12) 525')
            ->setCcm(2.5)
            ->setHp(150)
            ->setKm(158601)
            ->setYear(1979)
            ->setPs2(143.9);
        $manager->persist($e52m10);

        $e52m11 =(new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('VW')
            ->setType('T3 Multivan')
            ->setCcm(1.9)
            ->setHp(64)
            ->setKm(186994)
            ->setPs2(62.3);
        $manager->persist($e52m11);

        $e52m12 =(new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('Mercedes')
            ->setType('(W201) 190 E')
            ->setCcm(1.8)
            ->setHp(109)
            ->setKm(142657)
            ->setYear(1991)
            ->setPs2(96.5);
        $manager->persist($e52m12);

        $e52m13 =(new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode52'))
            ->setBrand('BMW')
            ->setType('(E39) 525d')
            ->setCcm(2.5)
            ->setHp(163)
            ->setKm(396683)
            ->setPs2(193.5);
        $manager->persist($e52m13);


        $manager->flush();
    }
}
