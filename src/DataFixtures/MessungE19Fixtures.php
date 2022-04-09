<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE19Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e19m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('VW')
            ->setType('T5')
            ->setCcm(2.0)
            ->setHp(140)
            ->setPs2(171.4)
            ->setComment('Chiptuning');
        $manager->persist($e19m1);


        $e19m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('Oldsmobile')
            ->setType('Alero')
            ->setCcm(3.4)
            ->setHp(174)
            ->setYear(1999)
            ->setPs2(166.1);
        $manager->persist($e19m2);


        $e19m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('VW')
            ->setType('Polo (86C) Turbo')
            ->setYear(1989)
            ->setPs2(146.4)
            ->setComment('War mal ein G40');
        $manager->persist($e19m3);


        $e19m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('VW')
            ->setType('Scirocco Turbo')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs1(159.1)
            ->setPs2(170.6)
            ->setComment('1. Messung mit Seriensteuergerät');
        $manager->persist($e19m4);


        $e19m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('BMW')
            ->setType('(E39) 523i')
            ->setCcm(2.5)
            ->setHp(170)
            ->setKm(227000)
            ->setYear(1999)
            ->setPs2(183.3);
        $manager->persist($e19m5);


        $e19m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('VW')
            ->setType('Passat (32B) GL')
            ->setCcm(1.6)
            ->setHp(75)
            ->setKm(71000)
            ->setPs2(78.2);
        $manager->persist($e19m6);


        $e19m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('Caterham')
            ->setType('')
            ->setCcm(1.6)
            ->setYear(1986)
            ->setPs1(108.9)
            ->setPs2(107.8)
            ->setComment('Kent-Motor');
        $manager->persist($e19m7);


        $e19m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('Opel')
            ->setType('Tigra')
            ->setComment('Nicht Messbar (Kein abschaltbares ESP)');
        $manager->persist($e19m8);


        $e19m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('BMW')
            ->setType('750i')
            ->setCcm(5.0)
            ->setHp(299)
            ->setPs2(263.8)
            ->setComment('V12) Automatik');
        $manager->persist($e19m9);


        $e19m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode19'))
            ->setBrand('BMW')
            ->setType('(E30) 325i Cabrio')
            ->setCcm(2.8)
            ->setPs1(176.1)
            ->setPs2(181.0)
            ->setComment('2.8 aus E36) Original Einspritzung) Software');
        $manager->persist($e19m10);

        $manager->flush();
    }
}
