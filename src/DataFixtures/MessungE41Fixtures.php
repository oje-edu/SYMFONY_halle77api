<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MessungE41Fixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $e41m1 = (new Car())
            ->setCarNr(1)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('Toyota')
            ->setType('MR2 (W3) 16V')
            ->setHp(140)
            ->setPs2(139.0)
            ->setComment('Fächerkrümmer) Auspuffanlage');
        $manager->persist($e41m1);


        $e41m2 = (new Car())
            ->setCarNr(2)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('Toyota')
            ->setType('MR2 (W3)')
            ->setHp(140)
            ->setPs1(139.8)
            ->setPs2(139.8);
        $manager->persist($e41m2);


        $e41m3 = (new Car())
            ->setCarNr(3)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('BMW')
            ->setType('(E46) 328i')
            ->setCcm(2.8)
            ->setHp(193)
            ->setKm(227776)
            ->setPs2(204.7);
        $manager->persist($e41m3);


        $e41m4 = (new Car())
            ->setCarNr(4)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('VW')
            ->setType('Golf II (Boston)')
            ->setKm(112011)
            ->setPs1(63.6)
            ->setPs2(63.8)
            ->setComment('Kaufpreis 2.350 bei 107.000km');
        $manager->persist($e41m4);


        $e41m5 = (new Car())
            ->setCarNr(5)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('Audi')
            ->setType('80 (B4)')
            ->setHp(174)
            ->setPs2(174.3);
        $manager->persist($e41m5);


        $e41m6 = (new Car())
            ->setCarNr(6)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('Audi')
            ->setType('100 CC')
            ->setHp(75)
            ->setKm(73501)
            ->setPs2(72.0);
        $manager->persist($e41m6);


        $e41m7 = (new Car())
            ->setCarNr(7)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('Opel')
            ->setType('Astra (G) T')
            ->setCcm(2.0)
            ->setHp(192)
            ->setKm(190985)
            ->setPs2(259.0);
        $manager->persist($e41m7);


        $e41m8 = (new Car())
            ->setCarNr(8)
            ->setEpisodeNr($this->getReference('episode41'))
            ->setBrand('Porsche')
            ->setType('SuperCarerra 911')
            ->setHp(231)
            ->setKm(206292)
            ->setPs1(229.0)
            ->setPs2(232.0)
            ->setComment('3.4 Motor');
        $manager->persist($e41m8);

        $manager->flush();
    }
}
