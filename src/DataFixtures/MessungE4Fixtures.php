<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE4Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e4m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('VW')
            ->setType('Passat (B7) TDI')
            ->setCcm(2.0)
            ->setHp(140)
            ->setPs1(154.6)
            ->setPs2(154.9)
            ->setComment('Tuningbox');
        $manager->persist($e4m1);

        $e4m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Opel')
            ->setType('Astra (H) OPC')
            ->setHp(241)
            ->setPs1(227.4)
            ->setPs2(216.6);
        $manager->persist($e4m2);

        $e4m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('VW')
            ->setType('Golf TSI')
            ->setCcm(1.4)
            ->setHp(122)
            ->setKm(197000)
            ->setPs2(123.1);
        $manager->persist($e4m3);

        $e4m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('VW')
            ->setType('UP! GTI')
            ->setCcm(1.0)
            ->setHp(115)
            ->setPs1(126.6)
            ->setPs2(138.8)
            ->setComment('2. Messung mit Tuningbox');
        $manager->persist($e4m4);

        $e4m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Audi')
            ->setType('A3')
            ->setCcm(1.6)
            ->setHp(102)
            ->setKm(550881)
            ->setPs1(90.8)
            ->setPs2(97.5)
            ->setComment('1. Messung mit laufender Klima');
        $manager->persist($e4m5);


        $e4m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(2.3)
            ->setHp(133)
            ->setPs1(113.3)
            ->setPs2(117.4);
        $manager->persist($e4m6);


        $e4m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('BMW')
            ->setType('(E46) 320d')
            ->setCcm(2.0)
            ->setHp(150)
            ->setKm(200000)
            ->setPs2(148.3);
        $manager->persist($e4m7);


        $e4m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Ford')
            ->setType('Mercury')
            ->setCcm(5.8)
            ->setYear(1969)
            ->setPs1(328.3)
            ->setPs2(339.5)
            ->setComment('Leistung am Rad) 2. Messung ohne Trichter');
        $manager->persist($e4m8);


        $e4m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(2.3)
            ->setHp(133)
            ->setPs1(107.3)
            ->setPs2(113.6)
            ->setComment('Benzinpumpenrelais');
        $manager->persist($e4m9);


        $e4m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('BMW')
            ->setType('(E30) 318i')
            ->setCcm(1.8)
            ->setHp(139)
            ->setPs1(178.2)
            ->setPs2(179.5);
        $manager->persist($e4m10);


        $e4m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('VW')
            ->setType('T3 Carat')
            ->setHp(139)
            ->setPs2(125.1)
            ->setComment('3.2 Subaru Motor');
        $manager->persist($e4m11);


        $e4m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Jaguar')
            ->setType('(TD)')
            ->setCcm(3.2)
            ->setHp(145)
            ->setPs1(145.6)
            ->setPs2(147.0);
        $manager->persist($e4m12);


        $e4m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('Audi')
            ->setType('')
            ->setCcm(1.9)
            ->setHp(131)
            ->setKm(300000)
            ->setPs2(128.9);
        $manager->persist($e4m13);


        $e4m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode4'))
            ->setBrand('BMW')
            ->setType('(E46) 328i')
            ->setCcm(2.8)
            ->setHp(193)
            ->setKm(335000)
            ->setPs1(193.1)
            ->setPs2(195.3);
        $manager->persist($e4m14);

        $manager->flush();

    }
}
