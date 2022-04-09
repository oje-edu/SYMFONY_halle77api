<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE48Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e48m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('VW')
            ->setType('Passat (3B)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setKm(199060)
            ->setPs2(184.5)
            ->setComment('Chiptuning');
        $manager->persist($e48m1);


        $e48m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('BMW')
            ->setType('(E39) 540i')
            ->setCcm(4.0)
            ->setHp(286)
            ->setKm(163067)
            ->setPs1(284.6)
            ->setPs2(290.4);
        $manager->persist($e48m2);


        $e48m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('Audi')
            ->setType('80 (B4)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setKm(298272)
            ->setPs2(105.9);
        $manager->persist($e48m3);


        $e48m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('BMW')
            ->setType('(E46) 325i Cabrio')
            ->setCcm(2.5)
            ->setHp(193)
            ->setKm(196962)
            ->setPs2(184.0);
        $manager->persist($e48m4);


        $e48m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('Opel')
            ->setType('Vectra (B) 16V Caravan')
            ->setCcm(1.6)
            ->setHp(101)
            ->setKm(145835)
            ->setYear(1999)
            ->setPs2(105.9);
        $manager->persist($e48m5);


        $e48m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('VW')
            ->setType('Golf III Variant')
            ->setCcm(1.6)
            ->setHp(101)
            ->setKm(138000)
            ->setPs1(99.0)
            ->setPs2(99.6);
        $manager->persist($e48m6);


        $e48m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode48'))
            ->setBrand('VW')
            ->setType('Golf IV TDI')
            ->setCcm(1.9)
            ->setPs2(146.7)
            ->setComment('Chiptuning) Ladelüftkühler');
        $manager->persist($e48m7);

        $manager->flush();
    }
}
