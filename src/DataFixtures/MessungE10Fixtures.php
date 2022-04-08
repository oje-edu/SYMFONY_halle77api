<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE10Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e10m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Opel')
            ->setType('Ascona (B)')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(151.8)
            ->setComment('Siehe episode_id 9 Nr. 102');
        $manager->persist($e10m1);


        $e10m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('Golf IV GTI')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs2(223.9);
        $manager->persist($e10m2);


        $e10m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('Golf I 16V (Cabrio)')
            ->setCcm(1.8)
            ->setHp(78)
            ->setPs2(104);
        $manager->persist($e10m3);


        $e10m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(2.3)
            ->setHp(133)
            ->setPs1(121.1)
            ->setPs2(117.0);
        $manager->persist($e10m4);


        $e10m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Lancia')
            ->setType('Fulvia')
            ->setCcm(1.3)
            ->setHp(90)
            ->setPs1(88.7)
            ->setPs2(94.2)
            ->setComment('2. Messung mit getauschten Vergaserdüsen');
        $manager->persist($e10m5);


        $e10m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Audi')
            ->setType('80 S (B3)')
            ->setCcm(1.8)
            ->setHp(90)
            ->setPs2(83.3);
        $manager->persist($e10m6);


        $e10m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Audi')
            ->setType('A4 TFSI')
            ->setCcm(2.0)
            ->setHp(200)
            ->setPs1(201.1)
            ->setPs2(207.8);
        $manager->persist($e10m7);


        $e10m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Porsche')
            ->setType('996')
            ->setCcm(3.4)
            ->setHp(300)
            ->setPs2(284.6);
        $manager->persist($e10m8);


        $e10m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('T5')
            ->setCcm(2.5)
            ->setHp(131)
            ->setPs2(174.4)
            ->setComment('Chiptuning');
        $manager->persist($e10m9);


        $e10m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Mitsubishi')
            ->setType('Colt Turbo')
            ->setCcm(1.5)
            ->setHp(150)
            ->setPs2(175.2);
        $manager->persist($e10m10);


        $e10m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('Polo 8V (6N)')
            ->setCcm(1.6)
            ->setHp(75)
            ->setPs2(81.1);
        $manager->persist($e10m11);


        $e10m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('Golf I (Cabrio)')
            ->setCcm(1.8)
            ->setHp(98)
            ->setPs2(96.9);
        $manager->persist($e10m12);


        $e10m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('Golf I GTI')
            ->setCcm(1.8)
            ->setHp(112)
            ->setYear(1983)
            ->setPs1(95.5)
            ->setPs2(96.1);
        $manager->persist($e10m13);


        $e10m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Audi')
            ->setType('90')
            ->setCcm(2.3)
            ->setHp(133)
            ->setKm(303000)
            ->setPs2(117.8);
        $manager->persist($e10m14);


        $e10m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('VW')
            ->setType('Golf VI GTI TFSI')
            ->setCcm(2.0)
            ->setHp(211)
            ->setPs2(242.3);
        $manager->persist($e10m15);


        $e10m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Opel')
            ->setType('Vivaro')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(117.5);
        $manager->persist($e10m16);


        $e10m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('BMW')
            ->setType('(E46) 320ci')
            ->setCcm(2.0)
            ->setHp(170)
            ->setPs2(163.6);
        $manager->persist($e10m17);


        $e10m18 = (new Car())
            ->setCarNr(18)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Pontiac')
            ->setType('LeMans Sport')
            ->setCcm(7.5)
            ->setHp(253)
            ->setPs2(308.4);
        $manager->persist($e10m18);


        $e10m19 = (new Car())
            ->setCarNr(19)
            ->setEpisodeNr($this->getReference('episode10'))
            ->setBrand('Ford')
            ->setType('Puma')
            ->setCcm(1.7)
            ->setHp(125)
            ->setKm(190000)
            ->setPs2(120.3);
        $manager->persist($e10m19);

        $manager->flush();

    }
}
