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

        $episode11 = (new Episode)
            ->setEpisodeNr(11)
            ->setTitle('Probefahrt im Slalom RENNER! (Polo I 16V)')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=AXpFX4AtpbY')
            ->setThumbnailUrl('https://img.youtube.com/vi/AXpFX4AtpbY/0.jpg');
        $manager->persist($episode11);

        $episode12 = (new Episode)
            ->setEpisodeNr(12)
            ->setTitle('Von ALLEM etwas dabei!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=m1Yfs-ENkC4')
            ->setThumbnailUrl('https://img.youtube.com/vi/m1Yfs-ENkC4/0.jpg');
        $manager->persist($episode12);

        $episode13 = (new Episode)
            ->setEpisodeNr(13)
            ->setTitle('8,1L + Kompressor = DREHMOMENT!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=0LXYZteQOkE')
            ->setThumbnailUrl('https://img.youtube.com/vi/0LXYZteQOkE/0.jpg');
        $manager->persist($episode13);

        $episode14 = (new Episode)
            ->setEpisodeNr(14)
            ->setTitle('ZWEI Freunde, ZWEI 5Zylinder!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=pdXfTF4kNQQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/pdXfTF4kNQQ/0.jpg');
        $manager->persist($episode14);

        $episode15 = (new Episode)
            ->setEpisodeNr(15)
            ->setTitle('3x BMW M5 auf der ROLLE!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=UWzepIKSErU')
            ->setThumbnailUrl('https://img.youtube.com/vi/UWzepIKSErU/0.jpg');
        $manager->persist($episode15);

        $episode16 = (new Episode)
            ->setEpisodeNr(16)
            ->setTitle('Toyota CROWN mit 1jz Motor!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=o9_-y0S3odg')
            ->setThumbnailUrl('https://img.youtube.com/vi/o9_-y0S3odg/0.jpg');
        $manager->persist($episode16);

        $episode17 = (new Episode)
            ->setEpisodeNr(17)
            ->setTitle('Eine TRUPPE 3x CLIO 16V!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=MBoTJRx2S9Q')
            ->setThumbnailUrl('https://img.youtube.com/vi/MBoTJRx2S9Q/0.jpg');
        $manager->persist($episode17);

        $episode18 = (new Episode)
            ->setEpisodeNr(18)
            ->setTitle('Honda Civic mit 2,3 Bar und über 650 PS!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=5nfUh6V5adQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/5nfUh6V5adQ/0.jpg');
        $manager->persist($episode18);

        $episode19 = (new Episode)
            ->setEpisodeNr(19)
            ->setTitle('Wir sind WIEDER DA!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=LZCKyJTHM40')
            ->setThumbnailUrl('https://img.youtube.com/vi/LZCKyJTHM40/0.jpg');
        $manager->persist($episode19);

        $episode20 = (new Episode)
            ->setEpisodeNr(20)
            ->setTitle('Boxer, Sauger, Turbo ALLES dabei!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=Z_73k9Mxn3c')
            ->setThumbnailUrl('https://img.youtube.com/vi/Z_73k9Mxn3c/0.jpg');
        $manager->persist($episode20);

        $episode21 = (new Episode)
            ->setEpisodeNr(21)
            ->setTitle('Ein EHEPAAR auf der Rolle!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=8L9YhVK3dfw')
            ->setThumbnailUrl('https://img.youtube.com/vi/8L9YhVK3dfw/0.jpg');
        $manager->persist($episode21);

        $episode22 = (new Episode)
            ->setEpisodeNr(22)
            ->setTitle('BMW E30 mit V8 + Lada 2111 mit MOTORTUNING!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=CgfHgEPeKgU')
            ->setThumbnailUrl('https://img.youtube.com/vi/CgfHgEPeKgU/0.jpg');
        $manager->persist($episode22);

        $episode23 = (new Episode)
            ->setEpisodeNr(23)
            ->setTitle('Mehr 5 Zylinder geht FAST nicht!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=0rnMbGcpCLQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/0rnMbGcpCLQ/0.jpg');
        $manager->persist($episode23);

        $episode24 = (new Episode)
            ->setEpisodeNr(24)
            ->setTitle('Es wird DUNKEL: Audi A6 Avant TURBO-Diesel!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=sR_JS37zyNo')
            ->setThumbnailUrl('https://img.youtube.com/vi/sR_JS37zyNo/0.jpg');
        $manager->persist($episode24);

        $episode25 = (new Episode)
            ->setEpisodeNr(25)
            ->setTitle('BMW E36 mit Oldschool-TUNING!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=_6cKT9BNgKE')
            ->setThumbnailUrl('https://img.youtube.com/vi/_6cKT9BNgKE/0.jpg');
        $manager->persist($episode25);

        $episode26 = (new Episode)
            ->setEpisodeNr(26)
            ->setTitle('Der ERSTE hat es GESCHAFFT!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=fvbykBegO3s')
            ->setThumbnailUrl('https://img.youtube.com/vi/fvbykBegO3s/0.jpg');
        $manager->persist($episode26);

        $episode27 = (new Episode)
            ->setEpisodeNr(27)
            ->setTitle('Jan MUSS einspringen! (Marco außer Betrieb)')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=runp_UMo_gI')
            ->setThumbnailUrl('https://img.youtube.com/vi/runp_UMo_gI/0.jpg');
        $manager->persist($episode27);

        $episode28 = (new Episode)
            ->setEpisodeNr(28)
            ->setTitle('Tag der ENTTÄUSCHUNGEN!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=Q7rKgXCFxms')
            ->setThumbnailUrl('https://img.youtube.com/vi/Q7rKgXCFxms/0.jpg');
        $manager->persist($episode28);

        $episode29 = (new Episode)
            ->setEpisodeNr(29)
            ->setTitle('Unfassbar GEILE Autos!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=PgW4HZv5X2c')
            ->setThumbnailUrl('https://img.youtube.com/vi/PgW4HZv5X2c/0.jpg');
        $manager->persist($episode29);

        $episode30 = (new Episode)
            ->setEpisodeNr(30)
            ->setTitle('Mazda RX7 mit WANKELMOTOR und TURBO!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=ILHbfxFF6u4')
            ->setThumbnailUrl('https://img.youtube.com/vi/ILHbfxFF6u4/0.jpg');
        $manager->persist($episode30);

        $episode31 = (new Episode)
            ->setEpisodeNr(31)
            ->setTitle('Wettschulden sind EHRENSCHULDEN!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=xIg7sxloRSA')
            ->setThumbnailUrl('https://img.youtube.com/vi/xIg7sxloRSA/0.jpg');
        $manager->persist($episode31);

        $episode32 = (new Episode)
            ->setEpisodeNr(32)
            ->setTitle('A wie ALFA ROMEO!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=HO4zip39pl8')
            ->setThumbnailUrl('https://img.youtube.com/vi/HO4zip39pl8/0.jpg');
        $manager->persist($episode32);

        $episode33 = (new Episode)
            ->setEpisodeNr(33)
            ->setTitle('Die PIRANHA Story von 1999!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=4rPDZ0xLyS4')
            ->setThumbnailUrl('https://img.youtube.com/vi/4rPDZ0xLyS4/0.jpg');
        $manager->persist($episode33);

        $episode34 = (new Episode)
            ->setEpisodeNr(34)
            ->setTitle('Viele ALT-TERMINE und viel HERZBLUT!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=CyXw1IsVFsA')
            ->setThumbnailUrl('https://img.youtube.com/vi/CyXw1IsVFsA/0.jpg');
        $manager->persist($episode34);

        $episode35 = (new Episode)
            ->setEpisodeNr(35)
            ->setTitle('NSU TT, GOLF II G60 & MINI mit V-TEC Motor!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=MC0NFzTLJ64')
            ->setThumbnailUrl('https://img.youtube.com/vi/MC0NFzTLJ64/0.jpg');
        $manager->persist($episode35);

        $episode36 = (new Episode)
            ->setEpisodeNr(36)
            ->setTitle('Marco ZEIGT wie man SCHUMMELT!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=rky0umSEMIU')
            ->setThumbnailUrl('https://img.youtube.com/vi/rky0umSEMIU/0.jpg');
        $manager->persist($episode36);

        $episode37 = (new Episode)
            ->setEpisodeNr(37)
            ->setTitle('PROJEKTAUTOS und SELTENE Modelle!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=azPKoGILPiQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/azPKoGILPiQ/0.jpg');
        $manager->persist($episode37);

        $episode38 = (new Episode)
            ->setEpisodeNr(38)
            ->setTitle('OLDSCHOOL-Tuning & Zu TIEF für den Prüfstand?')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=QfejIrbdLkY')
            ->setThumbnailUrl('https://img.youtube.com/vi/QfejIrbdLkY/0.jpg');
        $manager->persist($episode38);

        $episode39 = (new Episode)
            ->setEpisodeNr(39)
            ->setTitle('ÜBER den ROTEN BEREICH hinaus!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=eBir5tD_j04')
            ->setThumbnailUrl('https://img.youtube.com/vi/eBir5tD_j04/0.jpg');
        $manager->persist($episode39);

        $episode40 = (new Episode)
            ->setEpisodeNr(40)
            ->setTitle('BMW E9 CSL & Golf 3 VR6 TURBO!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=tQCr-ilriks')
            ->setThumbnailUrl('https://img.youtube.com/vi/tQCr-ilriks/0.jpg');
        $manager->persist($episode40);

        $episode41 = (new Episode)
            ->setEpisodeNr(41)
            ->setTitle('Außergewöhnliches TUNING!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=ToyAeBT77BU')
            ->setThumbnailUrl('https://img.youtube.com/vi/ToyAeBT77BU/0.jpg');
        $manager->persist($episode41);

        $episode42 = (new Episode)
            ->setEpisodeNr(42)
            ->setTitle('DRUCKSCHLAUCH PLATZT bei 1,5 BAR!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=F8mgJAhtEIU')
            ->setThumbnailUrl('https://img.youtube.com/vi/F8mgJAhtEIU/0.jpg');
        $manager->persist($episode42);

        $episode43 = (new Episode)
            ->setEpisodeNr(43)
            ->setTitle('ES GEHT WIEDER LOS!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=6UB_8KVNDHE')
            ->setThumbnailUrl('https://img.youtube.com/vi/6UB_8KVNDHE/0.jpg');
        $manager->persist($episode43);

        $episode44 = (new Episode)
            ->setEpisodeNr(44)
            ->setTitle('Der KÜRZESTE Prüfstandstag aller Zeiten!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=AcY53Nyh__k')
            ->setThumbnailUrl('https://img.youtube.com/vi/AcY53Nyh__k/0.jpg');
        $manager->persist($episode44);

        $episode45 = (new Episode)
            ->setEpisodeNr(45)
            ->setTitle('Ein OPEL-MOTOR im PONTIAC?')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=VI1e417i130')
            ->setThumbnailUrl('https://img.youtube.com/vi/VI1e417i130/0.jpg');
        $manager->persist($episode45);

        $episode46 = (new Episode)
            ->setEpisodeNr(46)
            ->setTitle('BUS mit 900.000 KM?!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=BP_DuLkvy5A')
            ->setThumbnailUrl('https://img.youtube.com/vi/BP_DuLkvy5A/0.jpg');
        $manager->persist($episode46);

        $episode47 = (new Episode)
            ->setEpisodeNr(47)
            ->setTitle('Auto ZERLEGT SICH beim PRÜFSTANDSLAUF!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=-U2iLAAdLb0')
            ->setThumbnailUrl('https://img.youtube.com/vi/-U2iLAAdLb0/0.jpg');
        $manager->persist($episode47);

        $episode48 = (new Episode)
            ->setEpisodeNr(48)
            ->setTitle('Mehr LEISTUNG ohne ENDSCHALLDÄMPFER?')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=fx_mDSNQ17A')
            ->setThumbnailUrl('https://img.youtube.com/vi/fx_mDSNQ17A/0.jpg');
        $manager->persist($episode48);

        $episode49 = (new Episode)
            ->setEpisodeNr(49)
            ->setTitle('GÄNSEHAUT bei 7800 RPM!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=4ZZwdyqSjm0')
            ->setThumbnailUrl('https://img.youtube.com/vi/4ZZwdyqSjm0/0.jpg');
        $manager->persist($episode49);

        $episode50 = (new Episode)
            ->setEpisodeNr(50)
            ->setTitle('300 KM/H im Porsche 911 (930 TURBO)!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=P-MOVMpB-PM')
            ->setThumbnailUrl('https://img.youtube.com/vi/P-MOVMpB-PM/0.jpg');
        $manager->persist($episode50);

        $episode51 = (new Episode)
            ->setEpisodeNr(51)
            ->setTitle('SELTENE Escort TURBOS & Montreal V8!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=7VlMZ5vMEho')
            ->setThumbnailUrl('https://img.youtube.com/vi/7VlMZ5vMEho/0.jpg');
        $manager->persist($episode51);

        $episode52 = (new Episode)
            ->setEpisodeNr(52)
            ->setTitle('IHR seid der WAHNSINN! - XXXL Prüfstandstag')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=ZulRgIrcaZQ')
            ->setThumbnailUrl('https://img.youtube.com/vi/ZulRgIrcaZQ/0.jpg');
        $manager->persist($episode52);

        $episode53 = (new Episode)
            ->setEpisodeNr(53)
            ->setTitle('CORRADO G70 & TRABANT 601!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=JD3lCvR592Y')
            ->setThumbnailUrl('https://img.youtube.com/vi/JD3lCvR592Y/0.jpg');
        $manager->persist($episode53);

        $episode54 = (new Episode)
            ->setEpisodeNr(54)
            ->setTitle('Mit dem ERSTEN Auto auf den PRÜFSTAND!')
            ->setEpisodeUrl('https://www.youtube.com/watch?v=VYMORL8ReGs')
            ->setThumbnailUrl('https://img.youtube.com/vi/VYMORL8ReGs/0.jpg');
        $manager->persist($episode54);

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
        $this->addReference('episode11', $episode11);
        $this->addReference('episode12', $episode12);
        $this->addReference('episode13', $episode13);
        $this->addReference('episode14', $episode14);
        $this->addReference('episode15', $episode15);
        $this->addReference('episode16', $episode16);
        $this->addReference('episode17', $episode17);
        $this->addReference('episode18', $episode18);
        $this->addReference('episode19', $episode19);
        $this->addReference('episode20', $episode20);
        $this->addReference('episode21', $episode21);
        $this->addReference('episode22', $episode22);
        $this->addReference('episode23', $episode23);
        $this->addReference('episode24', $episode24);
        $this->addReference('episode25', $episode25);
        $this->addReference('episode26', $episode26);
        $this->addReference('episode27', $episode27);
        $this->addReference('episode28', $episode28);
        $this->addReference('episode29', $episode29);
        $this->addReference('episode30', $episode30);
        $this->addReference('episode31', $episode31);
        $this->addReference('episode32', $episode32);
        $this->addReference('episode33', $episode33);
        $this->addReference('episode34', $episode34);
        $this->addReference('episode35', $episode35);
        $this->addReference('episode36', $episode36);
        $this->addReference('episode37', $episode37);
        $this->addReference('episode38', $episode38);
        $this->addReference('episode39', $episode39);
        $this->addReference('episode40', $episode40);
        $this->addReference('episode41', $episode41);
        $this->addReference('episode42', $episode42);
        $this->addReference('episode43', $episode43);
        $this->addReference('episode44', $episode44);
        $this->addReference('episode45', $episode45);
        $this->addReference('episode46', $episode46);
        $this->addReference('episode47', $episode47);
        $this->addReference('episode48', $episode48);
        $this->addReference('episode49', $episode49);
        $this->addReference('episode50', $episode50);
        $this->addReference('episode51', $episode51);
        $this->addReference('episode52', $episode52);
        $this->addReference('episode53', $episode53);
        $this->addReference('episode54', $episode54);
    }
}
