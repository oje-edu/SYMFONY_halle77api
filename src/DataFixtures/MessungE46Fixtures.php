<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE46Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e46m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('BMW')
            ->setType('(E39) 520i')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(170000)
            ->setPs1(137.2)
            ->setPs2(137.4);
        $manager->persist($e46m1);


        $e46m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('Opel')
            ->setType('Vectra (B)')
            ->setCcm(2.2)
            ->setHp(170)
            ->setKm(217000)
            ->setPs2(146.2)
            ->setComment('(Z22SE) Caravan Sport');
        $manager->persist($e46m2);


        $e46m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('Ford')
            ->setType('Escort MK-III')
            ->setCcm(1.6)
            ->setHp(78)
            ->setYear(1981)
            ->setPs2(82.7);
        $manager->persist($e46m3);


        $e46m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('VW')
            ->setType('T4 (Multivan)')
            ->setCcm(2.5)
            ->setHp(88)
            ->setKm(920000)
            ->setPs2(82.3);
        $manager->persist($e46m4);


        $e46m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('BMW')
            ->setType('(E30) 318is')
            ->setCcm(1.8)
            ->setHp(136)
            ->setPs2(135.7)
            ->setComment('Mehrventiler');
        $manager->persist($e46m5);


        $e46m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('Audi')
            ->setType('80 (B3) S')
            ->setCcm(1.8)
            ->setHp(88)
            ->setPs2(88.4);
        $manager->persist($e46m6);


        $e46m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode46'))
            ->setBrand('VW')
            ->setType('Golf II GTI 16V')
            ->setPs2(134.4);
        $manager->persist($e46m7);

        $manager->flush();
    }
}
