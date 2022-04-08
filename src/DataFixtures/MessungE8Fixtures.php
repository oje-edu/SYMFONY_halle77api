<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE8Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e8m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Audi')
            ->setType('Coupe (A5) TFSI')
            ->setCcm(1.8)
            ->setHp(170)
            ->setPs1(198.5)
            ->setPs2(198.5);
        $manager->persist($e8m1);


        $e8m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Audi')
            ->setType('A6 Biturbo (Limosine)')
            ->setCcm(2.7)
            ->setHp(230)
            ->setPs2(202.2);
        $manager->persist($e8m2);


        $e8m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(98)
            ->setPs2(110.8)
            ->setComment('Fächerkrümmer) Nockenwelle');
        $manager->persist($e8m3);


        $e8m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('BMW')
            ->setType('330ci')
            ->setCcm(3.0)
            ->setHp(231)
            ->setPs2(220.2);
        $manager->persist($e8m4);


        $e8m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Honda')
            ->setType('Civic')
            ->setCcm(1.4)
            ->setHp(75)
            ->setPs2(99.3)
            ->setComment('Drosseldichtung (90PS)');
        $manager->persist($e8m5);


        $e8m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Audi')
            ->setType('')
            ->setCcm(2.3)
            ->setHp(133)
            ->setKm(408000)
            ->setPs2(113.3);
        $manager->persist($e8m6);


        $e8m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('VW')
            ->setType('Golf II 16V (Pasadena)')
            ->setPs2(167.7);
        $manager->persist($e8m7);


        $e8m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('BMW')
            ->setType('(E87) 1')
            ->setHp(143)
            ->setPs2(143.9);
        $manager->persist($e8m8);


        $e8m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Opel')
            ->setType('Omega (A)')
            ->setCcm(2.6)
            ->setHp(150)
            ->setPs1(120.4)
            ->setPs2(120.5)
            ->setComment('Radleistung');
        $manager->persist($e8m9);


        $e8m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Alfa Romeo')
            ->setType('155')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(150.5);
        $manager->persist($e8m10);


        $e8m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('BMW')
            ->setType('(E91) 330i Touring')
            ->setCcm(3.0)
            ->setHp(272)
            ->setPs1(246.6)
            ->setPs2(238.8);
        $manager->persist($e8m11);


        $e8m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Smart')
            ->setType('ForFour')
            ->setCcm(1.5)
            ->setHp(109)
            ->setPs2(117.5);
        $manager->persist($e8m12);


        $e8m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('Ford')
            ->setType('Transit')
            ->setHp(80)
            ->setPs2(108.5);
        $manager->persist($e8m13);


        $e8m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('BMW')
            ->setType('(E36) 323')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs2(168.9);
        $manager->persist($e8m14);


        $e8m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode8'))
            ->setBrand('BMW')
            ->setType('(E30) 325i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs2(171.0);
        $manager->persist($e8m15);

        $manager->flush();

    }
}
