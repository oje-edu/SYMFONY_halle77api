<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE3Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e3m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Porsche')
            ->setType('968')
            ->setCcm(3.0)
            ->setHp(240)
            ->setPs1(213.8)
            ->setPs2(216.9);
        $manager->persist($e3m1);

        $e3m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Audi')
            ->setType('200 10V Turbo')
            ->setCcm(2.2)
            ->setHp(165)
            ->setPs2(205.7)
            ->setComment('Chipsatz, Downpipe');
        $manager->persist($e3m2);

        $e3m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('VW')
            ->setType('Golf VII GTI')
            ->setCcm(2.0)
            ->setHp(230)
            ->setPs2(243.4);
        $manager->persist($e3m3);

        $e3m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Ford')
            ->setType('Focus RS')
            ->setCcm(2.5)
            ->setHp(305)
            ->setPs1(294.4)
            ->setPs2(293.1);
        $manager->persist($e3m4);

        $e3m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('VW')
            ->setType('Golf IV 16V (Variant)')
            ->setCcm(1.4)
            ->setHp(75)
            ->setKm(226000)
            ->setPs1(76.5)
            ->setPs2(77.1);
        $manager->persist($e3m5);

        $e3m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Audi')
            ->setType('A3 TDI')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(186.4);
        $manager->persist($e3m6);

        $e3m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Mercedes')
            ->setType('C43 AMG')
            ->setCcm(4.3)
            ->setHp(306)
            ->setKm(303000)
            ->setPs1(248.0)
            ->setPs2(247.9);
        $manager->persist($e3m7);

        $e3m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Honda')
            ->setType('Civic')
            ->setCcm(1.6)
            ->setHp(125)
            ->setPs2(137.0)
            ->setComment('CRX Motor');
        $manager->persist($e3m8);

        $e3m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('Mercedes')
            ->setType('C55 AMG')
            ->setCcm(5.5)
            ->setHp(367)
            ->setPs2(312.8);
        $manager->persist($e3m9);

        $e3m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('BMW')
            ->setType('(E24) 635 CSI')
            ->setCcm(3.5)
            ->setHp(220)
            ->setYear(1981)
            ->setPs2(190.7)
            ->setComment('Halle 77 Auto');
        $manager->persist($e3m10);

        $e3m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode3'))
            ->setBrand('BMW')
            ->setType('335i')
            ->setCcm(3.5)
            ->setHp(306)
            ->setPs1(336.6)
            ->setPs2(341.5);
        $manager->persist($e3m11);

        $manager->flush();

    }
}
