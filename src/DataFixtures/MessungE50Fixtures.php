<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE50Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e50m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('BMW')
            ->setType('(E46) 330Ci Clubsport')
            ->setCcm(3.0)
            ->setHp(231)
            ->setKm(134160)
            ->setPs2(225.3);
        $manager->persist($e50m1);


        $e50m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('Opel')
            ->setType('Omega (B) MV6')
            ->setCcm(3.0)
            ->setHp(211)
            ->setYear(1996)
            ->setPs2(167.0)
            ->setComment('Steinmetz) Radleistung');
        $manager->persist($e50m2);


        $e50m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('BMW')
            ->setType('(E34) 520i')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(202.6)
            ->setComment('(E36) 2.8 193PS');
        $manager->persist($e50m3);


        $e50m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('Nissan')
            ->setType('Skyline (R33) GTS25t')
            ->setCcm(2.5)
            ->setHp(245)
            ->setPs2(233.2)
            ->setComment('Japan Import');
        $manager->persist($e50m4);


        $e50m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('VW')
            ->setType('Kübel (Typ 181)')
            ->setCcm(1.6)
            ->setHp(44)
            ->setYear(1970)
            ->setPs2(47.3);
        $manager->persist($e50m5);


        $e50m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('VW')
            ->setType('Golf III CL')
            ->setCcm(1.6)
            ->setHp(75)
            ->setKm(102459)
            ->setPs2(74.4);
        $manager->persist($e50m6);


        $e50m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('Nissan')
            ->setType('300 ZX')
            ->setCcm(3.0)
            ->setHp(283)
            ->setPs1(312.0)
            ->setPs2(333.9)
            ->setComment('2. Messung ohne DB-Eater');
        $manager->persist($e50m7);


        $e50m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('Audi')
            ->setType('A6 T')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs2(198.8)
            ->setComment('Software');
        $manager->persist($e50m8);


        $e50m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('Porsche')
            ->setType('930 Turbo')
            ->setCcm(3.3)
            ->setHp(286)
            ->setYear(1979)
            ->setPs2(299.1);
        $manager->persist($e50m9);


        $e50m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode50'))
            ->setBrand('Ford')
            ->setType('Granada Ghia Kombi')
            ->setCcm(2.3)
            ->setHp(114)
            ->setPs2(85.5);
        $manager->persist($e50m10);

        $manager->flush();
    }
}
