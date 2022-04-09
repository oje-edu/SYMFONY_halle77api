<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE32Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e32m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Alfa Romeo')
            ->setType('Aletta')
            ->setCcm(1.8)
            ->setHp(115)
            ->setYear(1976)
            ->setPs2(95.4);
        $manager->persist($e32m1);


        $e32m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Alfa Romeo')
            ->setType('Alfasud')
            ->setCcm(1.2)
            ->setHp(63)
            ->setKm(44000)
            ->setYear(1976)
            ->setPs2(59.3);
        $manager->persist($e32m2);


        $e32m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Ford')
            ->setType('Sierra Cosworth Turbo')
            ->setCcm(2.0)
            ->setHp(204)
            ->setPs2(186.4);
        $manager->persist($e32m3);


        $e32m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('VW')
            ->setType('Vento')
            ->setCcm(1.8)
            ->setHp(75)
            ->setPs2(85.1);
        $manager->persist($e32m4);


        $e32m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('VW')
            ->setType('Golf III (Cabrio)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(108.4);
        $manager->persist($e32m5);


        $e32m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(98)
            ->setYear(1991)
            ->setPs2(113.0)
            ->setComment('Fächerkrümmer) GTI Steuergerät');
        $manager->persist($e32m6);


        $e32m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Mazda')
            ->setType('Xedos 6')
            ->setCcm(2.0)
            ->setHp(120)
            ->setPs2(125.8);
        $manager->persist($e32m7);


        $e32m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Ford')
            ->setType('Sierra 2.9i Ghia')
            ->setCcm(2.8)
            ->setHp(145)
            ->setYear(1991)
            ->setPs2(146.3);
        $manager->persist($e32m8);


        $e32m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Opel')
            ->setType('Kadett (E)')
            ->setCcm(2.0)
            ->setHp(174)
            ->setPs1(158.7)
            ->setPs2(158.5)
            ->setComment('XE Motor 16V');
        $manager->persist($e32m9);


        $e32m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Audi')
            ->setType('Cabrio')
            ->setCcm(2.6)
            ->setHp(150)
            ->setPs1(127.2)
            ->setPs2(126.7);
        $manager->persist($e32m10);


        $e32m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Volvo')
            ->setType('C70 Coupe')
            ->setHp(193)
            ->setKm(210000)
            ->setYear(1999)
            ->setPs2(210.4)
            ->setComment('Chiptuning');
        $manager->persist($e32m11);


        $e32m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('VW')
            ->setType('Passat (Carat)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(100.2);
        $manager->persist($e32m12);


        $e32m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('BMW')
            ->setType('(E46) 330 Cabrio')
            ->setCcm(3.0)
            ->setHp(230)
            ->setPs2(215.8);
        $manager->persist($e32m13);


        $e32m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode32'))
            ->setBrand('Honda')
            ->setType('CRX')
            ->setCcm(1.6)
            ->setHp(124)
            ->setKm(174221)
            ->setPs2(132.4)
            ->setComment('Facherkrümmer');
        $manager->persist($e32m14);

        $manager->flush();
    }
}
