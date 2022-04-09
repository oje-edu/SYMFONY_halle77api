<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE13Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e13m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('VW')
            ->setType('T4')
            ->setCcm(2.4)
            ->setHp(77)
            ->setPs2(71.9);
        $manager->persist($e13m1);


        $e13m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('BMW')
            ->setType('(E30) 320i')
            ->setHp(129)
            ->setPs2(125);
        $manager->persist($e13m2);


        $e13m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Mini')
            ->setType('Cooper S')
            ->setHp(163)
            ->setPs2(200.1);
        $manager->persist($e13m3);


        $e13m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('BMW')
            ->setType('(E21) 323i')
            ->setCcm(2.5)
            ->setHp(143)
            ->setPs2(181.3)
            ->setComment('Aufgebohrt 2.7');
        $manager->persist($e13m4);


        $e13m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Honda')
            ->setType('Civic R')
            ->setHp(201)
            ->setPs2(198.9);
        $manager->persist($e13m5);


        $e13m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Mini')
            ->setType('Cooper T')
            ->setPs1(187.2)
            ->setPs2(194.9);
        $manager->persist($e13m6);


        $e13m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Honda')
            ->setType('S 2000')
            ->setHp(240)
            ->setPs2(214.0);
        $manager->persist($e13m7);


        $e13m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('BMW')
            ->setType('Z3 M')
            ->setCcm(3.2)
            ->setHp(321)
            ->setKm(32454)
            ->setPs2(285.3);
        $manager->persist($e13m8);


        $e13m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('VW')
            ->setType('Golf V GTI')
            ->setHp(200)
            ->setKm(220000)
            ->setPs2(263.0);
        $manager->persist($e13m9);


        $e13m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Audi')
            ->setType('80 T 20V')
            ->setCcm(2.2)
            ->setHp(220)
            ->setPs2(219.5);
        $manager->persist($e13m10);


        $e13m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('VW')
            ->setType('Golf')
            ->setHp(150)
            ->setPs2(218.4)
            ->setComment('2)2Bar Ladedruck');
        $manager->persist($e13m11);


        $e13m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Pontiac')
            ->setType('TransAM')
            ->setCcm(8.1)
            ->setPs1(591.1)
            ->setPs2(585.5)
            ->setComment('Alter! Was ein Drehmoment!');
        $manager->persist($e13m12);


        $e13m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('BMW')
            ->setType('(E46) 325i')
            ->setCcm(2.5)
            ->setHp(193)
            ->setKm(300000)
            ->setPs2(183.4);
        $manager->persist($e13m13);


        $e13m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Audi')
            ->setType('TT (Cabrio)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setKm(190000)
            ->setPs2(145.0);
        $manager->persist($e13m14);


        $e13m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('VW')
            ->setType('Derby I')
            ->setCcm(1.3)
            ->setHp(60)
            ->setPs2(83.6);
        $manager->persist($e13m15);


        $e13m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Toyota')
            ->setType('Supra')
            ->setPs2(335.3)
            ->setComment('BiTurbo) Rechtslenker) Messung im 4. Gang ');
        $manager->persist($e13m16);


        $e13m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Mercedes')
            ->setType('SLK 55 AMG')
            ->setCcm(5.4)
            ->setHp(360)
            ->setPs2(321.8);
        $manager->persist($e13m17);


        $e13m18 = (new Car())
            ->setCarNr(18)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Ford')
            ->setType('Fiesta ST')
            ->setCcm(1.0)
            ->setHp(101)
            ->setPs2(106.0);
        $manager->persist($e13m18);


        $e13m19 = (new Car())
            ->setCarNr(19)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Ford')
            ->setType('Mustang GT')
            ->setCcm(5.0)
            ->setHp(421)
            ->setPs2(346.9);
        $manager->persist($e13m19);


        $e13m20 = (new Car())
            ->setCarNr(20)
            ->setEpisodeNr($this->getReference('episode13'))
            ->setBrand('Peugeot')
            ->setType('308 Turbo')
            ->setCcm(1.6)
            ->setPs2(208.8);
        $manager->persist($e13m20);

        $manager->flush();

    }
}
