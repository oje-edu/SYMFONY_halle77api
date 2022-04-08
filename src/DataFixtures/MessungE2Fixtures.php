<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE2Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {


        $car7 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(1)
            ->setBrand('Nissan')
            ->setType('200SX')
            ->setCcm(1.8)
            ->setHp(169)
            ->setPs1(184.2)
            ->setPs2(186.4);
        $manager->persist($car7);

        $car8 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(2)
            ->setBrand('Mercedes')
            ->setType('(W124) 320E')
            ->setCcm(3.2)
            ->setHp(220)
            ->setPs1(167.0)
            ->setPs2(167.6);
        $manager->persist($car8);

        $car9 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(3)
            ->setBrand('Mercedes')
            ->setType('(W124)')
            ->setHp(180)
            ->setPs2(160.6)
            ->setComment('Halle77 Auto');
        $manager->persist($car9);

        $car10 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(4)
            ->setBrand('Audi')
            ->setType('Cabriolet')
            ->setCcm(2.6)
            ->setHp(150.0)
            ->setKm(293000)
            ->setPs2(142.4);
        $manager->persist($car10);

        $car11 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(5)
            ->setBrand('VW')
            ->setType('Polo GTI')
            ->setCcm(1.6)
            ->setHp(120.0)
            ->setPs1(122.0)
            ->setPs2(130.1)
            ->setComment('Kopfbearbeitung, Sportluftfilter');
        $manager->persist($car11);

        $car12 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(6)
            ->setBrand('Audi')
            ->setType('90')
            ->setCcm(2.3)
            ->setHp(136.0)
            ->setPs2(115.1);
        $manager->persist($car12);

        $car13 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(7)
            ->setBrand('Renault')
            ->setType('Megane RS')
            ->setCcm(2.0)
            ->setHp(265.0)
            ->setPs1(266.9)
            ->setPs2(283.6)
            ->setComment('2. Messung mit Race Chip Box');
        $manager->persist($car13);

        $car14 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(8)
            ->setBrand('BMW')
            ->setType('(E28) 520')
            ->setCcm(2.0)
            ->setHp(129.0)
            ->setPs2(181.0)
            ->setComment('528 Moter, Nockenwelle');
        $manager->persist($car14);

        $car15 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(9)
            ->setBrand('Audi')
            ->setType('Coupe GT 20V')
            ->setPs2(227.8)
            ->setComment('RS2 Turbolader');
        $manager->persist($car15);

        $car16 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(10)
            ->setBrand('Renault')
            ->setType('R5 GTE')
            ->setHp(135.0)
            ->setPs2(133.4);
        $manager->persist($car16);

        $car17 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(11)
            ->setBrand('Opel')
            ->setType('Astra (J)')
            ->setCcm(1.7)
            ->setHp(131.0)
            ->setPs1(158.7)
            ->setPs2(160.6)
            ->setComment('Chiptuning');
        $manager->persist($car17);

        $car18 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(12)
            ->setBrand('VW')
            ->setType('Polo R WRC')
            ->setCcm(2.0)
            ->setHp(220.0)
            ->setPs1(309.6)
            ->setPs2(308.9)
            ->setComment('Chiptuning');
        $manager->persist($car18);

        $car19 = (new Car())
            ->setEpisodeNr($this->getReference('episode2'))
            ->setCarNr(13)
            ->setBrand('BMW')
            ->setType('328i')
            ->setCcm(2.8)
            ->setHp(193.0)
            ->setPs2(205.0);
        $manager->persist($car19);

        $manager->flush();

    }
}
