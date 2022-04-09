<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE53Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e53m1 =(new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode53'))
            ->setBrand('VW')
            ->setType('Corrado G60')
            ->setCcm(1.8)
            ->setHp(160.0)
            ->setPs1(245.4)
            ->setPs2(255.3)
            ->setComment('G70 Umbau) 2. Lauf mit offener Haube');
        $manager->persist($e53m1);

        $e53m2 =(new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode53'))
            ->setBrand('Opel')
            ->setType('Kadett (E) 1.3i')
            ->setCcm(1.3)
            ->setHp(60.0)
            ->setPs2(58.3);
        $manager->persist($e53m2);

        $e53m3 =(new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode53'))
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(2.3)
            ->setHp(133.0)
            ->setKm(234028)
            ->setYear(1991)
            ->setPs2(126.9);
        $manager->persist($e53m3);

        $e53m4 =(new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode53'))
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(2.0)
            ->setHp(115.0)
            ->setKm(232402)
            ->setYear(1996)
            ->setPs2(112.8);
        $manager->persist($e53m4);

        $e53m5 =(new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode53'))
            ->setBrand('Opel')
            ->setType('Vectra (A) 2.0i')
            ->setCcm(2.0)
            ->setHp(115.0)
            ->setKm(155301)
            ->setYear(1991)
            ->setPs2(116.8);
        $manager->persist($e53m5);

        $e53m6 =(new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode53'))
            ->setBrand('Trabant')
            ->setType('601')
            ->setCcm(0.6)
            ->setHp(26.0)
            ->setYear(1987)
            ->setPs2(28.2);
        $manager->persist($e53m6);


        $manager->flush();
    }
}
