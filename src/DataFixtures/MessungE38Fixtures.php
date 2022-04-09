<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE38Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e38m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Audi')
            ->setType('A4 (B5)')
            ->setCcm(1.8)
            ->setHp(150)
            ->setKm(185868)
            ->setPs1(128.6)
            ->setPs2(126.6);
        $manager->persist($e38m1);


        $e38m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Volvo')
            ->setType('V70 TDI')
            ->setCcm(2.5)
            ->setHp(140)
            ->setKm(387482)
            ->setPs2(146.3);
        $manager->persist($e38m1);


        $e38m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('VW')
            ->setType('Corrado')
            ->setCcm(2.9)
            ->setHp(210)
            ->setKm(80000)
            ->setPs2(234.3)
            ->setComment('VR6 Kompressor (0.6 Bar)');
        $manager->persist($e38m2);


        $e38m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Opel')
            ->setType('Astra GSI 16V')
            ->setHp(150)
            ->setYear(1991)
            ->setPs2(149.4);
        $manager->persist($e38m4);


        $e38m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('KitCar')
            ->setType('')
            ->setCcm(1.8)
            ->setHp(82)
            ->setYear(1997)
            ->setPs2(54.1);
        $manager->persist($e38m5);


        $e38m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('VW')
            ->setType('Golf II GT (Spezial)')
            ->setHp(90)
            ->setKm(369947)
            ->setPs2(89.0);
        $manager->persist($e38m6);


        $e38m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Mazda')
            ->setType('626 LX')
            ->setCcm(1.6)
            ->setHp(80)
            ->setKm(70296)
            ->setYear(1984)
            ->setPs2(87.5);
        $manager->persist($e38m7);


        $e38m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Audi')
            ->setType('80 (B4)')
            ->setCcm(2.0)
            ->setHp(90)
            ->setKm(203000)
            ->setPs2(89.1);
        $manager->persist($e38m8);


        $e38m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('VW')
            ->setType('Scirocco TSI')
            ->setCcm(1.4)
            ->setHp(160)
            ->setKm(100000)
            ->setYear(2010)
            ->setPs2(202.9);
        $manager->persist($e38m9);


        $e38m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('VW')
            ->setType('Passat (32B) Coupe')
            ->setCcm(1.6)
            ->setHp(75)
            ->setKm(53533)
            ->setYear(1982)
            ->setPs2(127.8);
        $manager->persist($e38m10);


        $e38m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Opel')
            ->setType('Kadett (E) GSI')
            ->setHp(115)
            ->setComment('Keine Messung');
        $manager->persist($e38m11);


        $e38m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Opel')
            ->setType('Kadett')
            ->setCcm(1.3)
            ->setHp(60)
            ->setKm(93000)
            ->setComment('Keine Messung (Kaufpreis 950€ -2019 - 2. Hand Scheckheft)');
        $manager->persist($e38m12);


        $e38m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('BMW')
            ->setType('740i')
            ->setCcm(4.0)
            ->setHp(286)
            ->setKm(204851)
            ->setYear(1993)
            ->setPs2(271.7);
        $manager->persist($e38m13);


        $e38m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Suzuki')
            ->setType('Wagon R')
            ->setCcm(1.2)
            ->setHp(69)
            ->setKm(192.821)
            ->setPs2(77.3);
        $manager->persist($e38m14);


        $e38m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('Volvo')
            ->setType('850 (T5)')
            ->setHp(225)
            ->setKm(332413)
            ->setPs2(226.0);
        $manager->persist($e38m15);


        $e38m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode38'))
            ->setBrand('VW')
            ->setType('Passat VR5')
            ->setHp(170)
            ->setKm(250599)
            ->setPs2(167.1);
        $manager->persist($e38m16);

        $manager->flush();
    }
}
