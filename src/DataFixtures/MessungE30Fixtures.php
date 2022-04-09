<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE30Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e30m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Mercedes')
            ->setType('190')
            ->setCcm(1.8)
            ->setHp(109)
            ->setPs2(159.4)
            ->setComment('2.3L 16V 185PS');
        $manager->persist($e30m1);


        $e30m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Audi')
            ->setType('A4 (B5) Turbo')
            ->setCcm(1.8)
            ->setHp(180)
            ->setPs2(175.8);
        $manager->persist($e30m2);


        $e30m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('BMW')
            ->setType('(E30) 325i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setPs2(195.6)
            ->setComment('Aufgebohrt auf 2.7L');
        $manager->persist($e30m3);


        $e30m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('VW')
            ->setType('Vento VR6')
            ->setCcm(2.8)
            ->setHp(174)
            ->setPs2(175.9);
        $manager->persist($e30m4);


        $e30m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('VW')
            ->setType('Golf VR6')
            ->setCcm(2.8)
            ->setHp(174)
            ->setPs1(164.0)
            ->setPs2(165.4);
        $manager->persist($e30m5);


        $e30m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Audi')
            ->setType('80 (Typ 89) Cabrio')
            ->setCcm(2.8)
            ->setHp(174)
            ->setKm(179000)
            ->setYear(1993)
            ->setPs1(130.2)
            ->setPs2(121.8);
        $manager->persist($e30m6);


        $e30m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Audi')
            ->setType('80 (B4)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs1(107.5)
            ->setPs2(101.8)
            ->setComment('2. Messung mit Gas');
        $manager->persist($e30m7);


        $e30m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('BMW')
            ->setType('850')
            ->setCcm(5.0)
            ->setHp(299)
            ->setYear(1990)
            ->setPs2(289.3);
        $manager->persist($e30m8);


        $e30m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('BMW')
            ->setType('Z3 Coupe')
            ->setCcm(2.8)
            ->setHp(193)
            ->setPs2(193.9);
        $manager->persist($e30m9);


        $e30m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Mazda')
            ->setType('RX-7')
            ->setCcm(1.3)
            ->setHp(255)
            ->setPs1(282.6)
            ->setPs2(307.3)
            ->setComment('Japan-Version) 1. Messung 0.6 Bar) 2. Messung 0.9 Bar');
        $manager->persist($e30m10);


        $e30m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Volvo')
            ->setType('960 24V')
            ->setCcm(3.0)
            ->setHp(204)
            ->setKm(878000)
            ->setYear(1996)
            ->setPs2(174.9)
            ->setComment('Nicht Messbar (Automatik kuppelt nicht aus)');
        $manager->persist($e30m11);


        $e30m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('Honda')
            ->setType('Civic (EY9)')
            ->setCcm(1.4)
            ->setHp(75)
            ->setPs2(103.4)
            ->setComment('Drosseldichtung (90PS)) Fächerkrümmer');
        $manager->persist($e30m12);


        $e30m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode30'))
            ->setBrand('BMW')
            ->setType('(E46) 320d')
            ->setCcm(2.0)
            ->setHp(136)
            ->setKm(165000)
            ->setPs2(135.0);
        $manager->persist($e30m13);

        $manager->flush();
    }
}
