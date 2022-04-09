<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE29Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e29m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Audi')
            ->setType('200 Turbo 10V')
            ->setCcm(2.2)
            ->setHp(165)
            ->setPs2(202);
        $manager->persist($e29m1);


        $e29m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Seat')
            ->setType('Cordoba Cupra Turbo')
            ->setCcm(1.8)
            ->setHp(165)
            ->setPs2(144.9);
        $manager->persist($e29m2);


        $e29m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('VW')
            ->setType('Golf III')
            ->setCcm(1.6)
            ->setHp(75)
            ->setPs2(88.4);
        $manager->persist($e29m3);


        $e29m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Toyota')
            ->setType('Corolla Royal Special')
            ->setCcm(1.3)
            ->setHp(75)
            ->setYear(1996)
            ->setPs2(81.0);
        $manager->persist($e29m4);


        $e29m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Honda')
            ->setType('CRX')
            ->setCcm(1.6)
            ->setHp(125)
            ->setKm(143000)
            ->setYear(1998)
            ->setPs2(125.9);
        $manager->persist($e29m5);


        $e29m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Nissan')
            ->setType('Patrol TD')
            ->setCcm(2.8)
            ->setHp(116)
            ->setPs2(109.4);
        $manager->persist($e29m6);


        $e29m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('VW')
            ->setType('Corrado')
            ->setCcm(2.0)
            ->setPs2(255.8);
        $manager->persist($e29m7);


        $e29m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('BMW')
            ->setType('(E36) 318i Cabrio')
            ->setCcm(1.8)
            ->setHp(115)
            ->setKm(215000)
            ->setPs2(109.8);
        $manager->persist($e29m8);


        $e29m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('VW')
            ->setType('Golf II GT Special')
            ->setCcm(1.8)
            ->setHp(90)
            ->setPs2(89.0);
        $manager->persist($e29m9);


        $e29m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('BMW')
            ->setType('(E36) 318is')
            ->setCcm(1.8)
            ->setHp(140)
            ->setPs2(121.9);
        $manager->persist($e29m10);


        $e29m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Ferrari')
            ->setType('348')
            ->setCcm(3.4)
            ->setHp(300)
            ->setKm(95000)
            ->setYear(1992)
            ->setPs2(282.0);
        $manager->persist($e29m11);


        $e29m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Volvo')
            ->setType('850')
            ->setCcm(2.5)
            ->setHp(144)
            ->setYear(1996)
            ->setPs2(104.6);
        $manager->persist($e29m12);


        $e29m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Opel')
            ->setType('Calibra 16V')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(149.2);
        $manager->persist($e29m13);


        $e29m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('VW')
            ->setType('Golf IV Turbo')
            ->setCcm(1.8)
            ->setHp(150)
            ->setPs2(221.2);
        $manager->persist($e29m14);


        $e29m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Opel')
            ->setType('Kadett (D)')
            ->setCcm(1.4)
            ->setHp(60)
            ->setPs2(99.7);
        $manager->persist($e29m15);


        $e29m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Volvo')
            ->setType('V70')
            ->setCcm(2.5)
            ->setHp(144)
            ->setKm(375000)
            ->setPs2(138.1);
        $manager->persist($e29m16);


        $e29m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Mercedes')
            ->setType('(W201) 190E Sportline')
            ->setCcm(2.0)
            ->setHp(118)
            ->setPs2(104.4);
        $manager->persist($e29m17);


        $e29m18 = (new Car())
            ->setCarNr(18)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('Honda')
            ->setType('CRX (ED9)')
            ->setCcm(1.6)
            ->setHp(150)
            ->setPs1(168.4)
            ->setPs2(172.9)
            ->setComment('2. Messung anderes Steuergerät');
        $manager->persist($e29m18);


        $e29m19 = (new Car())
            ->setCarNr(19)
            ->setEpisodeNr($this->getReference('episode29'))
            ->setBrand('BMW')
            ->setType('(E30) 316')
            ->setCcm(1.6)
            ->setHp(99)
            ->setPs2(266.5)
            ->setComment('V8 4.0L 286PS');
        $manager->persist($e29m19);

        $manager->flush();
    }
}
