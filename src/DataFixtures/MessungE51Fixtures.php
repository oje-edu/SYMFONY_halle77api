<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE51Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e51m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Citroen')
            ->setType('CX Turbo Diesel')
            ->setCcm(2.5)
            ->setHp(97)
            ->setYear(1985)
            ->setPs1(67.7)
            ->setPs2(65.3);
        $manager->persist($e51m1);

        $e51m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Ford')
            ->setType('Escort MK-III')
            ->setComment('Keine Messung möglich (Zu tief)');
        $manager->persist($e51m2);

        $e51m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Volvo')
            ->setType('V70 TD')
            ->setCcm(2.5)
            ->setHp(140)
            ->setKm(379310)
            ->setPs2(170.3);
        $manager->persist($e51m3);

        $e51m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Volvo')
            ->setType('740 GL')
            ->setCcm(2.3)
            ->setHp(113)
            ->setPs2(97.2);
        $manager->persist($e51m4);

        $e51m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Ford')
            ->setType('Escort MK-IV RS Turbo S2')
            ->setCcm(1.6)
            ->setHp(132)
            ->setPs2(149.5);
        $manager->persist($e51m5);

        $e51m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Ford')
            ->setType('Escort MK-III RS Turbo S1')
            ->setCcm(2.0)
            ->setPs2(186.4);
        $manager->persist($e51m6);

        $e51m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Alfa Romeo')
            ->setType('Montreal')
            ->setCcm(2.6)
            ->setHp(200)
            ->setKm(99505)
            ->setYear(1976)
            ->setPs1(169.6)
            ->setPs2(171.4);
        $manager->persist($e51m7);

        $e51m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('Audi')
            ->setType('90 2.3E')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(188690)
            ->setPs2(127.0);
        $manager->persist($e51m8);

        $e51m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('VW')
            ->setType('Polo I (86C) G40')
            ->setCcm(1.3)
            ->setHp(113)
            ->setYear(1981)
            ->setPs2(109.5)
            ->setComment('70.iger Laderad) 0.6 Bar');
        $manager->persist($e51m9);

        $e51m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode51'))
            ->setBrand('VW')
            ->setType('Passat (32B)')
            ->setCcm(1.9)
            ->setHp(115)
            ->setKm(228452)
            ->setYear(1982)
            ->setPs1(109.2)
            ->setPs2(111.6);
        $manager->persist($e51m10);

        $manager->flush();
    }
}
