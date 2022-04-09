<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE47Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e47m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('Mercedes')
            ->setType('190E')
            ->setCcm(1.9)
            ->setHp(122)
            ->setKm(192910)
            ->setPs2(73.0);
        $manager->persist($e47m1);


        $e47m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('VW')
            ->setType('Golf III GT')
            ->setCcm(1.8)
            ->setHp(90)
            ->setPs2(95.0);
        $manager->persist($e47m2);


        $e47m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('BMW')
            ->setType('(E36) 323ti Compact')
            ->setCcm(2.5)
            ->setHp(170)
            ->setKm(221932)
            ->setPs2(175.1);
        $manager->persist($e47m3);


        $e47m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('VW')
            ->setType('Golf II')
            ->setCcm(1.6)
            ->setHp(69)
            ->setKm(152599)
            ->setPs2(69.8);
        $manager->persist($e47m4);


        $e47m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('Audi')
            ->setType('A4 (B5)')
            ->setCcm(1.8)
            ->setHp(125)
            ->setKm(69966)
            ->setPs1(119.3)
            ->setPs2(113.2);
        $manager->persist($e47m5);


        $e47m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('VW')
            ->setType('Golf IV TDI')
            ->setCcm(1.9)
            ->setHp(131)
            ->setKm(441697)
            ->setPs1(181.3)
            ->setPs2(180.7)
            ->setComment('2 Steuergeräte zum Testen');
        $manager->persist($e47m6);


        $e47m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('Opel')
            ->setType('Omega (B) Caravan')
            ->setCcm(2.2)
            ->setHp(144)
            ->setKm(206791)
            ->setPs2(132.2);
        $manager->persist($e47m7);


        $e47m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('Mercedes')
            ->setType('(W126) 500SE')
            ->setCcm(5.0)
            ->setHp(231)
            ->setKm(327200)
            ->setYear(1981)
            ->setPs2(199.8);
        $manager->persist($e47m8);


        $e47m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('VW')
            ->setType('Scirocco GTL')
            ->setCcm(1.8)
            ->setHp(112)
            ->setKm(52604)
            ->setPs2(102.0);
        $manager->persist($e47m9);


        $e47m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode47'))
            ->setBrand('Honda')
            ->setType('Civic VTEC')
            ->setCcm(2.0)
            ->setKm(102890)
            ->setPs2(168.4);
        $manager->persist($e47m10);

        $manager->flush();
    }
}
