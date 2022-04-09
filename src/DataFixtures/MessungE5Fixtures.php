<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE5Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e5m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode5'))
            ->setBrand('Honda')
            ->setType('Civic Type R')
            ->setCcm(2.0)
            ->setHp(200)
            ->setPs2(192.1)
            ->setComment('Chiptuning');
        $manager->persist($e5m1);


        $e5m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode5'))
            ->setBrand('VW')
            ->setType('Scirocco GT 2')
            ->setCcm(1.8)
            ->setHp(95)
            ->setPs1(77.4)
            ->setPs2(78.7);
        $manager->persist($e5m2);


        $e5m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode5'))
            ->setBrand('BMW')
            ->setType('330ci Coupe')
            ->setCcm(3.0)
            ->setHp(231)
            ->setKm(377473)
            ->setPs1(199.6)
            ->setPs2(202.2)
            ->setComment('LPG Anlage) 1. Messung auf Gas');
        $manager->persist($e5m3);


        $e5m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode5'))
            ->setBrand('Opel')
            ->setType('Astra (H) OPC')
            ->setCcm(2.0)
            ->setHp(240)
            ->setPs1(261.8)
            ->setComment('Chiptuning');
        $manager->persist($e5m4);


        $e5m5 = (new Car())
        ->setCarNr(5)
        ->setEpisodeNr($this->getReference('episode5'))
        ->setBrand('Audi')
        ->setCcm(2.0)
        ->setHp(113)
        ->setKm(137872)
        ->setPs1(97.5)
        ->setPs2(97.3)
        ->setComment('Michas Auto');
        $manager->persist($e5m5);


    $e5m6 = (new Car())
        ->setCarNr(6)
        ->setEpisodeNr($this->getReference('episode5'))
        ->setBrand('VW')
        ->setType('Golf III VR6')
        ->setCcm(2.8)
        ->setHp(174)
        ->setKm(320000)
        ->setYear(1983)
        ->setPs2(186.8);
        $manager->persist($e5m6);

    $e5m7 = (new Car())
        ->setCarNr(7)
        ->setEpisodeNr($this->getReference('episode5'))
        ->setBrand('BMW')
        ->setType('(E36) 320i')
        ->setCcm(2.0)
        ->setHp(150)
        ->setPs1(158.5)
        ->setPs2(158.3);
   $manager->persist($e5m6);


    $e5m8 = (new Car())
        ->setCarNr(8)
        ->setEpisodeNr($this->getReference('episode5'))
        ->setBrand('VW')
        ->setType('Passat TDI')
        ->setHp(140)
        ->setPs1(197.4)
        ->setPs2(197.4);
   $manager->persist($e5m8);


    $e5m9 = (new Car())
        ->setCarNr(9)
        ->setEpisodeNr($this->getReference('episode5'))
        ->setBrand('Audi')
        ->setType('TT TFSI')
        ->setHp(200)
        ->setPs2(226.2)
        ->setComment('Software');
   $manager->persist($e5m9);


    $e5m10 = (new Car())
        ->setCarNr(10)
        ->setEpisodeNr($this->getReference('episode5'))
        ->setBrand('Skoda')
        ->setType('Octavia 3 RS')
        ->setHp(245)
        ->setPs2(302.3)
        ->setComment('Software');
   $manager->persist($e5m10);

        $manager->flush();

    }
}
