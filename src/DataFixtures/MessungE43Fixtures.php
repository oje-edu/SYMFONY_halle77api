<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE43Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e43m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('VW')
            ->setType('Golf IV (Cabrio)')
            ->setCcm(1.6)
            ->setHp(101)
            ->setKm(200662)
            ->setPs2(130.2);
        $manager->persist($e43m1);


        $e43m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Mercedes')
            ->setType('(W124) 250D')
            ->setCcm(2.5)

            ->setKm(469811)
            ->setPs2(96.1)
            ->setComment('7 Sitzer');
        $manager->persist($e43m2);


        $e43m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('VW')
            ->setType('Golf IV TDI')
            ->setCcm(1.9)
            ->setHp(90)
            ->setKm(462451)
            ->setPs2(92.3);
        $manager->persist($e43m3);


        $e43m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Alfa Romeo')
            ->setType('156 16V')
            ->setHp(150)
            ->setPs2(186.7)
            ->setComment('Twin Spark) Turbo (Lowboost)');
        $manager->persist($e43m4);


        $e43m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('VW')
            ->setType('T4 2.4D')
            ->setCcm(2.4)
            ->setHp(78)
            ->setPs2(61.6);
        $manager->persist($e43m5);


        $e43m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Audi')
            ->setType('80 (B4) Avant')
            ->setCcm(2.8)
            ->setHp(174)
            ->setKm(233019)
            ->setPs1(130.2)
            ->setPs2(153.1)
            ->setComment('Tests mit Saugrohrumschaltung');
        $manager->persist($e43m6);


        $e43m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Mercedes')
            ->setType('500S')
            ->setCcm(5.0)
            ->setHp(306)
            ->setPs2(298.2);
        $manager->persist($e43m7);


        $e43m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Ford')
            ->setType('Fiesta')
            ->setCcm(1.1)
            ->setHp(50)
            ->setKm(76.397)
            ->setPs2(47.4)
            ->setComment('Gekauft für 200€');
        $manager->persist($e43m8);


        $e43m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Ford')
            ->setType('Sierra 2.0i LX')
            ->setCcm(2.0)
            ->setHp(120)
            ->setPs2(117.1)
            ->setComment('Gekauft 600€ (Kurbelwellensensor war defekt)');
        $manager->persist($e43m9);


        $e43m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Audi')
            ->setType('80 (B3) 1.9S')
            ->setCcm(1.9)
            ->setKm(36120)
            ->setYear(1989)
            ->setPs2(104.1)
            ->setComment('Gekauft für 6.000€ bei 26.000km');
        $manager->persist($e43m10);


        $e43m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode43'))
            ->setBrand('Lancia')
            ->setType('Kappa T Coupe')
            ->setCcm(2.0)
            ->setHp(220)
            ->setKm(250184)
            ->setYear(1998)
            ->setPs2(238.5);
        $manager->persist($e43m11);

        $manager->flush();
    }
}
