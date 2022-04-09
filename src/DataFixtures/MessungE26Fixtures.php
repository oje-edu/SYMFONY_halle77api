<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE26Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e26m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Barkas')
            ->setType('B 1000')
            ->setCcm(1.0)
            ->setHp(42)
            ->setYear(1989)
            ->setPs2(43.6);
        $manager->persist($e26m1);


        $e26m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Audi')
            ->setType('A4')
            ->setCcm(1.6)
            ->setHp(101)
            ->setKm(192000)
            ->setPs2(101.0);
        $manager->persist($e26m2);


        $e26m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Honda')
            ->setType('CRX')
            ->setCcm(1.6)
            ->setHp(125)
            ->setPs2(132.6)
            ->setComment('Auspuffanlage 130PS eingetragen');
        $manager->persist($e26m3);


        $e26m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Audi')
            ->setType('Coupe GT')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(99199)
            ->setPs1(115.1);
        $manager->persist($e26m4);


        $e26m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Opel')
            ->setType('Astra (F) GSI 16V')
            ->setHp(150)
            ->setYear(88.000)
            ->setPs2(154.7);
        $manager->persist($e26m5);


        $e26m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Mercedes')
            ->setType('( /8 ) 200 D')
            ->setCcm(2.0)
            ->setHp(54)
            ->setPs2(47.7);
        $manager->persist($e26m6);


        $e26m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Audi')
            ->setType('100 (Typ 44) CC')
            ->setCcm(1.9)
            ->setHp(100)
            ->setKm(144811)
            ->setYear(1984)
            ->setPs2(87.2);
        $manager->persist($e26m7);


        $e26m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Audi')
            ->setType('80 (Typ 89) 2.0E')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(130000)
            ->setPs1(97.4)
            ->setPs2(96.1);
        $manager->persist($e26m8);


        $e26m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Audi')
            ->setType('80 (Typ B4)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(272.000)
            ->setPs2(102.6);
        $manager->persist($e26m9);


        $e26m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('VW')
            ->setType('T3')
            ->setPs2(142.1)
            ->setComment('2.8 VR6 174PS');
        $manager->persist($e26m10);


        $e26m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Mercedes')
            ->setType('( / 8 ) 220 D')
            ->setCcm(2.2)
            ->setHp(60)
            ->setPs2(55.3);
        $manager->persist($e26m11);


        $e26m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('BMW')
            ->setType('(E30) 318is')
            ->setCcm(1.8)
            ->setHp(136)
            ->setPs2(128.7);
        $manager->persist($e26m12);


        $e26m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Mercedes')
            ->setType('(W124) 230 E')
            ->setCcm(2.3)
            ->setHp(132)
            ->setPs2(124.2);
        $manager->persist($e26m13);


        $e26m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode26'))
            ->setBrand('Mercedes')
            ->setType('(W123) 300 TD')
            ->setCcm(3.0)
            ->setHp(125)
            ->setYear(1982)
            ->setPs1(99.2)
            ->setPs2(100.6);
        $manager->persist($e26m14);

        $manager->flush();
    }
}
