<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE49Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e49m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('VW')
            ->setType('Käfer 1303')
            ->setCcm(1.6)
            ->setHp(50)
            ->setYear(1975)
            ->setPs2(54.8);
        $manager->persist($e49m1);


        $e49m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('Ford')
            ->setType('Fiesta (Gen 3)')
            ->setCcm(1.1)
            ->setHp(50)
            ->setKm(165000)
            ->setPs2(53.5);
        $manager->persist($e49m2);


        $e49m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('Opel')
            ->setType('Kadett (E) GSI 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(179.0)
            ->setComment('168 Nockenwelle (Schrick)');
        $manager->persist($e49m3);


        $e49m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('BMW')
            ->setType('(E46) 325i Cabrio')
            ->setCcm(2.5)
            ->setHp(192)
            ->setKm(148832)
            ->setPs2(196.4)
            ->setComment('Software');
        $manager->persist($e49m4);


        $e49m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('Opel')
            ->setType('Omega (A) Caravan')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(299118)
            ->setPs1(198.8)
            ->setPs2(200.9)
            ->setComment('3.0 24V Motor (204PS)');
        $manager->persist($e49m5);


        $e49m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('BMW')
            ->setType('(E34) 520i 24V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(137.000)
            ->setPs2(150.6);
        $manager->persist($e49m6);


        $e49m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode49'))
            ->setBrand('Opel')
            ->setType('Omega (B) 16V Caravan')
            ->setCcm(2.0)
            ->setHp(136)
            ->setKm(122229)
            ->setPs2(129.7);
        $manager->persist($e49m7);

        $manager->flush();
    }
}
