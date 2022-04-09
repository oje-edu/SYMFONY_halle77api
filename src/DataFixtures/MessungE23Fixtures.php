<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE23Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $e23m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Volvo')
            ->setType('850 T5')
            ->setCcm(2.3)
            ->setHp(225)
            ->setPs1(243.3)
            ->setPs2(241.8);
        $manager->persist($e23m1);


        $e23m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('VW')
            ->setType('Golf VI GTI')
            ->setCcm(2.0)
            ->setHp(211)
            ->setPs1(234.6)
            ->setPs2(236.6);
        $manager->persist($e23m2);


        $e23m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('VW')
            ->setType('Golf VI GTI')
            ->setCcm(2.0)
            ->setHp(211)
            ->setPs2(244.3);
        $manager->persist($e23m3);


        $e23m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Audi')
            ->setType('A4 Avant')
            ->setCcm(2.0)
            ->setHp(133)
            ->setPs2(122.7);
        $manager->persist($e23m4);


        $e23m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Audi')
            ->setType('100 (C4)')
            ->setCcm(2.3)
            ->setHp(133)
            ->setKm(490000)
            ->setPs2(122.2);
        $manager->persist($e23m5);


        $e23m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Audi')
            ->setType('80 Avant')
            ->setCcm(2.3)
            ->setHp(136)
            ->setPs2(125.7);
        $manager->persist($e23m6);


        $e23m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Audi')
            ->setType('Coupe')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(342000)
            ->setPs2(118.4);
        $manager->persist($e23m7);


        $e23m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Audi')
            ->setType('Coupe')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(274.000)
            ->setYear(1992)
            ->setPs2(126.7);
        $manager->persist($e23m8);


        $e23m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Opel')
            ->setType('Astra ( G ) OPC (Kombi)')
            ->setCcm(2.0)
            ->setHp(200)
            ->setYear(2003)
            ->setPs2(222.2);
        $manager->persist($e23m9);


        $e23m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Honda')
            ->setType('Civic VTEC')
            ->setCcm(1.5)
            ->setHp(114)
            ->setPs1(112.2)
            ->setPs2(112.6)
            ->setComment('2. Messung mit offenem Luftfiltergehäuse');
        $manager->persist($e23m10);


        $e23m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('VW')
            ->setType('T4 D')
            ->setCcm(2.4)
            ->setHp(78)
            ->setKm(314000)
            ->setPs2(51.6);
        $manager->persist($e23m11);


        $e23m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Opel')
            ->setType('Kadett (E) Caravan Club Spezial')
            ->setCcm(1.8)
            ->setHp(90)
            ->setKm(76000)
            ->setYear(1991)
            ->setPs2(89.3);
        $manager->persist($e23m12);


        $e23m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Opel')
            ->setType('Speedster')
            ->setCcm(2.2)
            ->setHp(147)
            ->setPs2(139.3)
            ->setComment('Ansaugung');
        $manager->persist($e23m13);


        $e23m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('Audi')
            ->setType('80 Cabrio')
            ->setCcm(2.3)
            ->setHp(133)
            ->setPs2(123.1);
        $manager->persist($e23m14);


        $e23m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode23'))
            ->setBrand('VW')
            ->setType('Caddy')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(149.0)
            ->setComment('Kompressor');
        $manager->persist($e23m15);

        $manager->flush();
    }
}
