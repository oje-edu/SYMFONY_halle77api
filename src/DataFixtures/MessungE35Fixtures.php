<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE35Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e35m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Volvo')
            ->setType('740GL')
            ->setCcm(2.3)
            ->setKm(424795)
            ->setPs2(107.1);
        $manager->persist($e35m1);


        $e35m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('VW')
            ->setType('Käfer (Cabrio)')
            ->setCcm(1.6)
            ->setHp(50)
            ->setKm(34805)
            ->setYear(1976)
            ->setPs2(67.4)
            ->setComment('Ami Version) Nockenwellen)Hubraumerweiterung');
        $manager->persist($e35m2);


        $e35m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Mini')
            ->setType('Cooper')
            ->setHp(124)
            ->setYear(1989)
            ->setPs1(125.4)
            ->setPs2(124.0)
            ->setComment('Honda CRX ED9 16Z5');
        $manager->persist($e35m3);


        $e35m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Lancia')
            ->setType('Detra')
            ->setCcm(1.8)
            ->setHp(101)
            ->setPs2(95.4);
        $manager->persist($e35m4);


        $e35m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('BMW')
            ->setType('1602 (Cabrio)')
            ->setCcm(2.0)
            ->setHp(150)
            ->setYear(1969)
            ->setPs2(144.5);
        $manager->persist($e35m5);


        $e35m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('BMW')
            ->setType('1502')
            ->setCcm(1.8)
            ->setHp(115)
            ->setKm(89820)
            ->setPs2(124.6)
            ->setComment('Motor vom E30');
        $manager->persist($e35m6);


        $e35m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('BMW')
            ->setType('(E39) 525i')
            ->setCcm(2.5)
            ->setHp(192)
            ->setPs1(182.5)
            ->setPs2(134.1);
        $manager->persist($e35m7);


        $e35m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Mercedes')
            ->setType('GLA')
            ->setCcm(1.6)
            ->setHp(122)
            ->setComment('Messung nicht möglich (ESP)');
        $manager->persist($e35m8);


        $e35m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('VW')
            ->setType('Derby GT')
            ->setCcm(1.8)
            ->setHp(200)
            ->setPs2(197.7)
            ->setComment('Skoda Fabia (1U) Motor');
        $manager->persist($e35m9);


        $e35m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('VW')
            ->setType('T3')
            ->setHp(75)
            ->setYear(1990)
            ->setPs2(71.7);
        $manager->persist($e35m10);


        $e35m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('VW')
            ->setType('Golf II G60')
            ->setHp(160)
            ->setKm(191000)
            ->setPs2(161.6);
        $manager->persist($e35m11);


        $e35m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('BMW')
            ->setType('(E39) 520i')
            ->setCcm(2.0)
            ->setHp(150)
            ->setPs2(152.3);
        $manager->persist($e35m12);


        $e35m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('NSU')
            ->setType('TTS')
            ->setHp(75)
            ->setKm(27760)
            ->setPs1(83.2)
            ->setPs2(88.5);
        $manager->persist($e35m13);


        $e35m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Honda')
            ->setType('Civic ERD')
            ->setCcm(1.4)
            ->setHp(75)
            ->setPs2(98.1)
            ->setComment('Dichtung entfernt somit 90PS Serie');
        $manager->persist($e35m14);


        $e35m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Opel')
            ->setType('Calibra 16V Ecotec')
            ->setCcm(2.0)
            ->setHp(136)
            ->setPs2(132.6);
        $manager->persist($e35m15);


        $e35m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Peugeot')
            ->setType('207 RC')
            ->setCcm(1.6)
            ->setHp(174)
            ->setKm(129364)
            ->setYear(2008)
            ->setPs2(198.2)
            ->setComment('Downpipe');
        $manager->persist($e35m16);


        $e35m17 = (new Car())
            ->setCarNr(17)
            ->setEpisodeNr($this->getReference('episode35'))
            ->setBrand('Audi')
            ->setType('')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(222676)
            ->setPs2(101.0)
            ->setComment('Michas Auto');
        $manager->persist($e35m17);

        $manager->flush();
    }
}
