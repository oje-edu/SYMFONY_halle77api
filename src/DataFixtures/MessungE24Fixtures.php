<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE24Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e24m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Audi')
            ->setType('100 2.3E')
            ->setCcm(2.3)
            ->setHp(136)
            ->setPs2(125.9);
        $manager->persist($e24m1);


        $e24m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('VW')
            ->setType('T4 D')
            ->setCcm(2.4)
            ->setHp(78)
            ->setPs2(64.7);
        $manager->persist($e24m2);


        $e24m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('VW')
            ->setType('T4 TD')
            ->setCcm(2.5)
            ->setHp(102)
            ->setKm(400000)
            ->setPs2(126.8);
        $manager->persist($e24m3);


        $e24m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Audi')
            ->setType('100')
            ->setCcm(2.3)
            ->setHp(133)
            ->setPs1(109.5)
            ->setPs2(104.3);
        $manager->persist($e24m4);


        $e24m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Opel')
            ->setType('Astra (F) GSI 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(152.1);
        $manager->persist($e24m5);


        $e24m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Audi')
            ->setType('Coupe (Typ 81)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(125.3);
        $manager->persist($e24m6);


        $e24m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Audi')
            ->setType('Coupe (Typ 81)')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(131.4)
            ->setComment('Fächerkrümmer) Auspuffanlage');
        $manager->persist($e24m7);


        $e24m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Opel')
            ->setType('Astra (F) GSI 8V')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(125.5);
        $manager->persist($e24m8);


        $e24m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('VW')
            ->setType('Golf II (Fire & Ice)')
            ->setCcm(1.8)
            ->setHp(90)
            ->setKm(316000)
            ->setPs2(93.0);
        $manager->persist($e24m9);


        $e24m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Audi')
            ->setType('A6 TDI Avant')
            ->setCcm(2.5)
            ->setHp(115)
            ->setKm(276993)
            ->setPs2(159.8)
            ->setComment('Downpipe) Software');
        $manager->persist($e24m10);


        $e24m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('VW')
            ->setType('T3 Caravelle Carat')
            ->setCcm(2.3)
            ->setHp(136)
            ->setPs1(114.4)
            ->setPs2(114.7);
        $manager->persist($e24m11);


        $e24m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('VW')
            ->setType('T4 Multivan')
            ->setCcm(2.5)
            ->setHp(110)
            ->setKm(326533)
            ->setPs2(104.4);
        $manager->persist($e24m12);


        $e24m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Opel')
            ->setType('Astra (G) CC Ecotec')
            ->setCcm(2.0)
            ->setHp(136)
            ->setPs2(149.3)
            ->setComment('Fächerkrümmer');
        $manager->persist($e24m13);


        $e24m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Morris Mini')
            ->setType('Cooper')
            ->setCcm(1.3)
            ->setHp(60)
            ->setYear(1999)
            ->setPs2(55.7);
        $manager->persist($e24m14);


        $e24m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Ford')
            ->setType('Escort MK-VII RS2000 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(150.4);
        $manager->persist($e24m15);


        $e24m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Ford')
            ->setType('Mercury Capri Turbo')
            ->setCcm(1.6)
            ->setHp(140)
            ->setPs1(188.7)
            ->setPs2(163.5);
        $manager->persist($e24m16);


        $e24m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode24'))
            ->setBrand('Ford')
            ->setType('Escort Turbo 8V Cabrio')
            ->setCcm(1.6)
            ->setHp(150)
            ->setPs1(156.4)
            ->setPs2(156.2);
        $manager->persist($e24m17);

        $manager->flush();
    }
}
