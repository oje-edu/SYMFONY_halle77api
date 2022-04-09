<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE36Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e36m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Mazda')
            ->setType('MX5')
            ->setHp(115)
            ->setKm(161880)
            ->setPs2(114.0);
        $manager->persist($e36m1);


        $e36m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Audi')
            ->setType('A3')
            ->setCcm(1.8)
            ->setHp(150)
            ->setKm(139573)
            ->setPs2(149.0);
        $manager->persist($e36m2);


        $e36m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Audi')
            ->setType('80')
            ->setCcm(1.9)
            ->setHp(115)
            ->setPs2(100.5);
        $manager->persist($e36m3);


        $e36m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Opel')
            ->setType('Corsa (D)')
            ->setCcm(1.7)
            ->setHp(125)
            ->setYear(2009)
            ->setPs2(151.2);
        $manager->persist($e36m4);


        $e36m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('BMW')
            ->setType('(E36) 318is 16V Coupe')
            ->setCcm(1.8)
            ->setHp(140)
            ->setKm(253556)
            ->setYear(1996)
            ->setPs2(142.1);
        $manager->persist($e36m5);


        $e36m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Opel')
            ->setType('Ascona (B)')
            ->setHp(150)
            ->setKm(78455)
            ->setYear(1975)
            ->setPs2(158.3)
            ->setComment('Astra (F) 16V Motor) Nockenwellen');
        $manager->persist($e36m6);


        $e36m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('VW')
            ->setType('Polo (16.1) GTI 16V')
            ->setHp(120)
            ->setKm(195000)
            ->setPs2(122.5);
        $manager->persist($e36m7);


        $e36m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Renault')
            ->setType('Twingo RS')
            ->setHp(133)
            ->setPs2(135)
            ->setComment('Ansaugung');
        $manager->persist($e36m8);


        $e36m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('BMW')
            ->setType('(E38) 7er')
            ->setHp(286)
            ->setKm(195370)
            ->setYear(1998)
            ->setPs2(297.3);
        $manager->persist($e36m9);


        $e36m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('BMW')
            ->setType('(E12) 525')
            ->setCcm(2.5)
            ->setHp(150)
            ->setKm(181.786)
            ->setYear(1980)
            ->setPs2(135.0)
            ->setComment('Drehzahlbegrenzer regelt bei 6000 u/min ab .. / Bosch bzw. BEGU (Serie) bei 6.600');
        $manager->persist($e36m10);


        $e36m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('VW')
            ->setType('Golf II (Fire & Ice)')
            ->setCcm(1.8)
            ->setHp(90)
            ->setKm(31700)
            ->setYear(1990)
            ->setPs1(97.2)
            ->setPs2(97.9)
            ->setComment('Nockenwelle) Fächerkrümmer');
        $manager->persist($e36m11);


        $e36m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Renault')
            ->setType('R5 (Campus)')
            ->setCcm(1.1)
            ->setHp(45)
            ->setKm(183400)
            ->setYear(1993)
            ->setPs2(48.8);
        $manager->persist($e36m12);


        $e36m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode36'))
            ->setBrand('Toyota')
            ->setType('Celica')
            ->setCcm(1.8)
            ->setHp(143)
            ->setYear(2000)
            ->setPs1(131.9)
            ->setPs2(137.8);
        $manager->persist($e36m13);

        $manager->flush();
    }
}
