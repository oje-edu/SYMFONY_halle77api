<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE22Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e22m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Opel')
            ->setType('Comodore GS/E')
            ->setCcm(3.0)
            ->setHp(177)
            ->setPs1(182.5)
            ->setPs2(182.2);
        $manager->persist($e22m1);


        $e22m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Volvo')
            ->setType('V70 T5')
            ->setCcm(2.0)
            ->setHp(240)
            ->setPs1(224.4);
        $manager->persist($e22m2);


        $e22m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Honda')
            ->setType('Concerto 16V')
            ->setCcm(1.6)
            ->setHp(111)
            ->setPs2(125.9);
        $manager->persist($e22m3);


        $e22m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Daihatsu')
            ->setType('Charade TX')
            ->setCcm(1.3)
            ->setHp(90)
            ->setPs2(94.2);
        $manager->persist($e22m4);


        $e22m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Lada')
            ->setType('2111 16V')
            ->setCcm(1.5)
            ->setHp(94)
            ->setPs2(131.3)
            ->setComment('Frei programmierbares Steuergerät) Verstellbare Nockenwellen) Ansaugbrücke');
        $manager->persist($e22m5);


        $e22m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('BMW')
            ->setType('(E46) 325ci')
            ->setCcm(2.5)
            ->setHp(192)
            ->setPs2(189.1);
        $manager->persist($e22m6);


        $e22m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('VW')
            ->setType('Passat (3B)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setKm(313000)
            ->setYear(1989)
            ->setPs1(162.6)
            ->setPs2(160.3);
        $manager->persist($e22m7);


        $e22m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Audi')
            ->setType('80 (B4)')
            ->setCcm(2.0)
            ->setHp(90)
            ->setPs2(111.8)
            ->setComment('Nockenwelle) Ansaugbrücke');
        $manager->persist($e22m8);


        $e22m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Opel')
            ->setType('Olympia')
            ->setCcm(1.7)
            ->setHp(75)
            ->setPs2(71.6);
        $manager->persist($e22m9);


        $e22m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('VW')
            ->setType('Golf II GTI 16V (Wolfsburg Edition)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs1(149.7)
            ->setPs2(152.0)
            ->setComment('2.0 ABF Motor) Garlock-Chip');
        $manager->persist($e22m10);


        $e22m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Audi')
            ->setType('90 (Typ 89)')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(360000)
            ->setPs2(129.2);
        $manager->persist($e22m11);


        $e22m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('BMW')
            ->setType('(E30) 325 Cabrio')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs1(253)
            ->setPs2(256)
            ->setComment('V8 4Liter 286PS. 1. Messung mit Original Steuergerät');
        $manager->persist($e22m12);


        $e22m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode22'))
            ->setBrand('Peugeot')
            ->setType('206 S16')
            ->setCcm(2.0)
            ->setHp(136)
            ->setYear(2004)
            ->setPs2(139.1);
        $manager->persist($e22m13);

        $manager->flush();
    }
}
