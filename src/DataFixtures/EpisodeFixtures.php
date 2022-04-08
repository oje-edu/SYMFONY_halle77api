<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $episode = (new Episode())
            ->setEpisodeNr(1)
            ->setTitle('GÄNSEHAUT bei über 8200rpm!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=97FspZAbtG8')
            ->setThumbnailUrl('https://img.youtube.com/vi/97FspZAbtG8/0.jpg');
        $manager->persist($episode);

        $episode2 = (new Episode())
            ->setEpisodeNr(2)
            ->setTitle('HARTE Fakten!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=SrU_Op2Mc2Y')
            ->setThumbnailUrl('https://img.youtube.com/vi/SrU_Op2Mc2Y/0.jpg');

        $manager->persist($episode2);

        $episode3 = (new Episode())
            ->setEpisodeNr(3)
            ->setTitle('Bunter Mix aus SAUGER & TURBO!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=eZ4BLLSVVo8')
            ->setThumbnailUrl('https://img.youtube.com/vi/eZ4BLLSVVo8/0.jpg');
        $manager->persist($episode3);

        $episode4 = (new Episode())
            ->setEpisodeNr(4)
            ->setTitle('Es wird LAUT! / 5.8L V8 Schalter!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=nXnDJVK-cr4')
            ->setThumbnailUrl('https://img.youtube.com/vi/nXnDJVK-cr4/0.jpg');
        $manager->persist($episode4);

        $episode5 = (new Episode())
            ->setEpisodeNr(5)
            ->setTitle('MICHAS Auto auf der ROLLE!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=GtusWvFzYaQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/GtusWvFzYaQ/0.jpg');
        $manager->persist($episode5);

        $episode6 = (new Episode())
            ->setEpisodeNr(6)
            ->setTitle('Wenn die TUNINGBOX nach HINTEN losgeht!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=l3yIQiLBLdQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/l3yIQiLBLdQ/0.jpg');
        $manager->persist($episode6);

        $episode7 = (new Episode())
            ->setEpisodeNr(7)
            ->setTitle('BMW E30 M3 / VW T4 5Zyl TURBO!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=__5KDiJOqa0')
            ->setThumbnailUrl('https://img.youtube.com/vi/__5KDiJOqa0/0.jpg');
        $manager->persist($episode7);

        $episode8 = (new Episode())
            ->setEpisodeNr(8)
            ->setTitle('Vom SMART bis zum TRANSIT!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=djQVD9sAPNI')
            ->setThumbnailUrl('https://img.youtube.com/vi/djQVD9sAPNI/0.jpg');
        $manager->persist($episode8);

        $episode9 = (new Episode())
            ->setEpisodeNr(9)
            ->setTitle('SELTENE Autos & EXTREME Umbauten!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=VIbkf3p4oBE')
            ->setThumbnailUrl('https://img.youtube.com/vi/VIbkf3p4oBE/0.jpg');
        $manager->persist($episode9);

        $episode10 = (new Episode())
            ->setEpisodeNr(10)
            ->setTitle('Spontan VERGASER abstimmen!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=Q3uZ8m2ljdo')
            ->setThumbnailUrl('https://img.youtube.com/vi/Q3uZ8m2ljdo/0.jpg');
        $manager->persist($episode10);

        $manager->flush();

        $this->addReference('episode1', $episode);
        $this->addReference('episode2', $episode2);
        $this->addReference('episode3', $episode3);
        $this->addReference('episode4', $episode4);
        $this->addReference('episode5', $episode5);
        $this->addReference('episode6', $episode6);
        $this->addReference('episode7', $episode7);
        $this->addReference('episode8', $episode8);
        $this->addReference('episode9', $episode9);
        $this->addReference('episode10', $episode10);
    }
}
