<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE33Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e33m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Mercedes')
            ->setType('(C123) 230SE')
            ->setCcm(2.3)
            ->setHp(136)
            ->setKm(202667)
            ->setYear(1981)
            ->setPs2(121.5);
        $manager->persist($e33m1);


        $e33m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Peugeot')
            ->setType('306 (Cabrio)')
            ->setHp(110)
            ->setKm(203227)
            ->setYear(2000)
            ->setPs2(118.9);
        $manager->persist($e33m2);


        $e33m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Mini')
            ->setType('Cooper')
            ->setCcm(1.3)
            ->setHp(63)
            ->setYear(1992)
            ->setPs2(58.4);
        $manager->persist($e33m3);


        $e33m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Opel')
            ->setType('Omega (B)')
            ->setCcm(2.5)
            ->setHp(170)
            ->setKm(102379)
            ->setPs2(175.3);
        $manager->persist($e33m4);


        $e33m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Audi')
            ->setType('(Cabrio)')
            ->setHp(133)
            ->setKm(165259)
            ->setYear(1992)
            ->setPs2(128.3);
        $manager->persist($e33m5);


        $e33m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('VW')
            ->setType('T4 (Caravelle)')
            ->setCcm(2.8)
            ->setHp(204)
            ->setKm(143867)
            ->setPs1(153.7)
            ->setPs2(153.7);
        $manager->persist($e33m6);


        $e33m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Nissan')
            ->setType('Primera STW')
            ->setCcm(2.0)
            ->setHp(180)
            ->setKm(167098)
            ->setYear(1998)
            ->setPs1(146.9)
            ->setPs2(146.5)
            ->setComment('Fächerkrümmer) Ansaugung');
        $manager->persist($e33m7);


        $e33m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('VW')
            ->setType('Käfer')
            ->setCcm(1.8)
            ->setKm(49878)
            ->setPs2(106.9)
            ->setComment('Udo Becker Motor');
        $manager->persist($e33m8);


        $e33m9 = (new Car())
            ->setCarNr(9)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('VW')
            ->setType('Golf II GTI')
            ->setHp(112)
            ->setKm(195095)
            ->setYear(1986)
            ->setPs2(102.1);
        $manager->persist($e33m9);


        $e33m10 = (new Car())
            ->setCarNr(10)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Fiat')
            ->setType('Coupe Turbo 20V')
            ->setCcm(2.0)
            ->setHp(220)
            ->setPs2(256.4);
        $manager->persist($e33m10);


        $e33m11 = (new Car())
            ->setCarNr(11)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Opel')
            ->setType('Rekord (C) 1900 Coupe')
            ->setCcm(2.0)
            ->setHp(110)
            ->setKm(95991)
            ->setYear(1968)
            ->setPs2(98.3)
            ->setComment('2.0E Motor');
        $manager->persist($e33m11);


        $e33m12 = (new Car())
            ->setCarNr(12)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Opel')
            ->setType('Astra (F) Cabrio')
            ->setCcm(2.0)
            ->setHp(115)
            ->setPs2(118.6);
        $manager->persist($e33m12);


        $e33m13 = (new Car())
            ->setCarNr(13)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Dodge')
            ->setType('Viper SRT')
            ->setCcm(8.0)
            ->setHp(400)
            ->setPs2(393.3);
        $manager->persist($e33m13);


        $e33m14 = (new Car())
            ->setCarNr(14)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Fiat')
            ->setType('130')
            ->setCcm(3.5)
            ->setHp(165)
            ->setKm(47138)
            ->setYear(1971)
            ->setPs2(157.9);
        $manager->persist($e33m14);


        $e33m15 = (new Car())
            ->setCarNr(15)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('Porsche')
            ->setType('964 (C2) Cabrio')
            ->setCcm(3.6)
            ->setHp(250)
            ->setKm(191769)
            ->setPs2(237.5);
        $manager->persist($e33m15);


        $e33m16 = (new Car())
            ->setCarNr(16)
            ->setEpisodeNr($this->getReference('episode33'))
            ->setBrand('BMW')
            ->setType('(E34) 540i Touring')
            ->setCcm(4.0)
            ->setHp(286)
            ->setKm(224154)
            ->setPs2(273.2);
        $manager->persist($e33m16);

        $manager->flush();
    }
}
