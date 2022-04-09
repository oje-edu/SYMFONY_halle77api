<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE54Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e54m1 =(new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode54'))
            ->setBrand('Audi')
            ->setType('90 (Typ81)')
            ->setCcm(2.3)
            ->setHp(136.0)
            ->setYear(1985)
            ->setPs2(116.4);
        $manager->persist($e54m1);

        $e54m2 =(new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode54'))
            ->setBrand('VW')
            ->setType('Beetle')
            ->setCcm(2.3)
            ->setHp(170.0)
            ->setKm(186775)
            ->setPs1(163.3)
            ->setPs2(167.0)
            ->setComment('Software');
        $manager->persist($e54m2);

        $e54m3 =(new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode54'))
            ->setBrand('Toyota')
            ->setType('Corolla TS')
            ->setCcm(1.8)
            ->setHp(192.0)
            ->setYear(2002)
            ->setPs1(187.5)
            ->setPs2(192.4)
            ->setComment('Software) 2. Messug mit offener Haube');
        $manager->persist($e54m3);

        $e54m4 =(new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode54'))
            ->setBrand('Ford')
            ->setType('Fiesta XR2')
            ->setCcm(1.6)
            ->setHp(84.0)
            ->setPs1(88.0)
            ->setPs2(null)
            ->setComment('Halle77 Auto');
        $manager->persist($e54m4);

        $e54m5 =(new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode54'))
            ->setBrand('Opel')
            ->setType('Vectra (A) 2.0i')
            ->setCcm(2.0)
            ->setHp(115.0)
            ->setKm(129791)
            ->setYear(1993)
            ->setPs2(114.1);
        $manager->persist($e54m5);

        $e54m6 =(new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode54'))
            ->setBrand('Volvo')
            ->setType('944')
            ->setCcm(2.3)
            ->setHp(165.0)
            ->setKm(350538)
            ->setYear(1992)
            ->setPs2(154.2)
            ->setComment('Ladeluftkühler');
        $manager->persist($e54m6);

        $manager->flush();
    }
}
