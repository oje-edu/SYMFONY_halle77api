<?php

namespace App\DataFixtures;

use App\Entity\Plate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlateFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $p1 = (new Plate())
            ->setKz('AA')
            ->setName('Aalen')
            ->setLat(48.8366887)
            ->setLng(10.0971163);
        $manager->persist($p1);

        $p2 = (new Plate())
            ->setKz('AC')
            ->setName('Aachen')
            ->setLat(50.7758)
            ->setLng(6.0838);
        $manager->persist($p2);

        $p3 = (new Plate())
            ->setKz('AG (CH)')
            ->setName('Aargau')
            ->setLat(47.403182)
            ->setLng(8.084340);
        $manager->persist($p3);

        $p4 = (new Plate())
            ->setKz('AH')
            ->setName('Ahaus')
            ->setLat(52.0825322)
            ->setLng(7.0150057);
        $manager->persist($p4);

        $p5 = (new Plate())
            ->setKz('AIB')
            ->setName('Bad Aibling')
            ->setLat(47.8640182)
            ->setLng(12.0093171);
        $manager->persist($p5);


        $p6 = (new Plate())
            ->setKz('AK')
            ->setName('Altenkirchen')
            ->setLat(50.687222)
            ->setLng(7.645556);
        $manager->persist($p6);

        $p7 = (new Plate())
            ->setKz('AM')
            ->setName('Amberg')
            ->setLat(49.4403198)
            ->setLng(11.8633445);
        $manager->persist($p7);

        $p8 = (new Plate())
            ->setKz('AP')
            ->setName('Apolda')
            ->setLat(51.0260095)
            ->setLng(11.5155495);
        $manager->persist($p8);

        $p9 = (new Plate())
            ->setKz('APD')
            ->setName('Apolda')
            ->setLat(51.0260095)
            ->setLng(11.5155495);
        $manager->persist($p9);

        $p10 = (new Plate())
            ->setKz('AS')
            ->setName('Amberg-Sulzbach')
            ->setLat(49.464264)
            ->setLng(11.723378);
        $manager->persist($p10);

        $p11 = (new Plate())
            ->setKz('AUR')
            ->setName('Aurich')
            ->setLat(53.4708393)
            ->setLng(7.4848308);
        $manager->persist($p11);

        $p12 = (new Plate())
            ->setKz('AW')
            ->setName('Ahrweiler')
            ->setLat(50.541815)
            ->setLng(7.1197177);
        $manager->persist($p12);

        $p13 = (new Plate())
            ->setKz('AZ')
            ->setName('Alzey')
            ->setLat(49.7462012)
            ->setLng( 8.1171135);
        $manager->persist($p13);

        $p14 = (new Plate())
            ->setKz('B')
            ->setName('Berlin')
            ->setLat(52.520007)
            ->setLng(13.404954);
        $manager->persist($p14);

        $p15 = (new Plate())
            ->setKz('B (Belgien)')
            ->setName('Keine Zuordnung durch Kennzeichen möglich')
            ->setLat(50.506213)
            ->setLng(4.476049);
        $manager->persist($p15);

        $p16 = (new Plate())
            ->setKz('BA')
            ->setName('Bamberg')
            ->setLat(49.8988135)
            ->setLng(10.9027636);
        $manager->persist($p16);

        $p17 = (new Plate())
            ->setKz('BAR')
            ->setName('Barnim')
            ->setLat(52.857445)
            ->setLng(13.699830);
        $manager->persist($p17);

        $p18 = (new Plate())
            ->setKz('BCH')
            ->setName('Buchen (ODW.)')
            ->setLat(49.521667)
            ->setLng(9.323333);
        $manager->persist($p18);

        $p19 = (new Plate())
            ->setKz('BE (CH)')
            ->setName('Bern')
            ->setLat(46.947922)
            ->setLng(7.444608);
        $manager->persist($p19);

        $p20 = (new Plate())
            ->setKz('BF')
            ->setName('Steinfurt')
            ->setLat(52.1445658)
            ->setLng(7.3334636);
        $manager->persist($p20);

        $p21 = (new Plate())
            ->setKz('BI')
            ->setName('Bielefeld')
            ->setLat(52.0302285)
            ->setLng(8.5324708);
        $manager->persist($p21);

        $p22 = (new Plate())
            ->setKz('BIN')
            ->setName('Bingen am Rhein')
            ->setLat(49.9667396)
            ->setLng(7.904596);
        $manager->persist($p22);

        $p23 = (new Plate())
            ->setKz('BIR')
            ->setName('Birkenfeld')
            ->setLat(49.6488236)
            ->setLng(7.1647477);
        $manager->persist($p23);

        $p24 = (new Plate())
            ->setKz('BIT')
            ->setName('Bitburg')
            ->setLat(49.9664145)
            ->setLng(6.5298603);
        $manager->persist($p24);

        $p25 = (new Plate())
            ->setKz('BK')
            ->setName('Backnang')
            ->setLat(48.9471455)
            ->setLng(9.4341813);
        $manager->persist($p25);

        $p26 = (new Plate())
            ->setKz('BLB')
            ->setName('Bad Berleburg')
            ->setLat(51.0515666)
            ->setLng(8.3926278);
        $manager->persist($p26);

        $p27 = (new Plate())
            ->setKz('BM')
            ->setName('Bergheim')
            ->setLat(50.9451945)
            ->setLng(6.6555022);
        $manager->persist($p27);

        $p28 = (new Plate())
            ->setKz('BN')
            ->setName('Bonn')
            ->setLat(50.73743)
            ->setLng(7.0982068);
        $manager->persist($p28);

        $p29 = (new Plate())
            ->setKz('BN (AT)')
            ->setName('Baden')
            ->setLat(48.002870)
            ->setLng(16.265988);
        $manager->persist($p29);

        $p30 = (new Plate())
            ->setKz('BO')
            ->setName('Bochum')
            ->setLat(51.4818445)
            ->setLng(7.2162363);
        $manager->persist($p30);

        $p31 = (new Plate())
            ->setKz('BOR')
            ->setName('Borken')
            ->setLat(51.8482714)
            ->setLng(6.8594477);
        $manager->persist($p31);

        $p32 = (new Plate())
            ->setKz('BRA')
            ->setName('Brake')
            ->setLat(53.327237)
            ->setLng(8.4775443);
        $manager->persist($p32);

        $p33 = (new Plate())
            ->setKz('BS')
            ->setName('Braunschweig')
            ->setLat(52.2688736)
            ->setLng(10.5267696);
        $manager->persist($p33);

        $p34 = (new Plate())
            ->setKz('BÜD')
            ->setName('Büdingen')
            ->setLat(50.2862963)
            ->setLng(9.1113838);
        $manager->persist($p34);

        $p35 = (new Plate())
            ->setKz('BÜR')
            ->setName('Büren')
            ->setLat(51.55092)
            ->setLng(8.5597678);
        $manager->persist($p35);

        $p36 = (new Plate())
            ->setKz('CAS')
            ->setName('Castrop-Rauxel')
            ->setLat(51.5632625)
            ->setLng(7.3150145);
        $manager->persist($p36);

        $p37 = (new Plate())
            ->setKz('CE')
            ->setName('Celle')
            ->setLat(52.6175963)
            ->setLng(10.0628515);
        $manager->persist($p37);

        $p38 = (new Plate())
            ->setKz('CLP')
            ->setName('Cloppenburg')
            ->setLat(52.844198)
            ->setLng(8.0530158);
        $manager->persist($p38);

        $p39 = (new Plate())
            ->setKz('COE')
            ->setName('Coesfeld')
            ->setLat(51.9382944)
            ->setLng(7.1675831);
        $manager->persist($p39);

        $p40 = (new Plate())
            ->setKz('CR')
            ->setName('Crailsheim')
            ->setLat(49.1337354)
            ->setLng(10.0633573);
        $manager->persist($p40);

        $p41 = (new Plate())
            ->setKz('CUX')
            ->setName('Cuxhaven')
            ->setLat(53.859336)
            ->setLng(8.6879057);
        $manager->persist($p41);

        $p42 = (new Plate())
            ->setKz('D')
            ->setName('Düsseldorf')
            ->setLat(51.2277411)
            ->setLng(6.7734556);
        $manager->persist($p42);

        $p43 = (new Plate())
            ->setKz('DA')
            ->setName('Darmstadt')
            ->setLat(49.8728253)
            ->setLng(8.6511929);
        $manager->persist($p43);

        $p44 = (new Plate())
            ->setKz('DAH')
            ->setName('Dachau')
            ->setLat(48.2629984)
            ->setLng(11.4339022);
        $manager->persist($p44);

        $p45 = (new Plate())
            ->setKz('DAU')
            ->setName('Daun')
            ->setLat(50.1952445)
            ->setLng(6.8232859);
        $manager->persist($p45);

        $p46 = (new Plate())
            ->setKz('DEL')
            ->setName('Delmenhorst')
            ->setLat(53.0521886)
            ->setLng(8.6355932);
        $manager->persist($p46);

        $p47 = (new Plate())
            ->setKz('DD')
            ->setName('Dresden')
            ->setLat(51.0504088)
            ->setLng(13.7372621);
        $manager->persist($p47);

        $p48 = (new Plate())
            ->setKz('DH')
            ->setName('Diepholz')
            ->setLat(52.6056456)
            ->setLng(8.3707878);
        $manager->persist($p48);

        $p49 = (new Plate())
            ->setKz('DIL')
            ->setName('Lahn-Dill-Kreis')
            ->setLat(50.67097)
            ->setLng(8.358588);
        $manager->persist($p49);

        $p50 = (new Plate())
            ->setKz('DIN')
            ->setName('Dinslaken')
            ->setLat(51.5674264)
            ->setLng(6.747534);
        $manager->persist($p50);

        $p51 = (new Plate())
            ->setKz('DIZ')
            ->setName('Diez')
            ->setLat(50.3706368)
            ->setLng(8.016054);
        $manager->persist($p51);

        $p52 = (new Plate())
            ->setKz('DN')
            ->setName('Düren')
            ->setLat(50.8029513)
            ->setLng(6.481105);
        $manager->persist($p52);

        $p53 = (new Plate())
            ->setKz('DON')
            ->setName('Donauwörth')
            ->setLat(48.7185826)
            ->setLng(10.7778041);
        $manager->persist($p53);

        $p54 = (new Plate())
            ->setKz('DT')
            ->setName('Detmold')
            ->setLat(51.9384783)
            ->setLng(8.868638);
        $manager->persist($p54);

        $p55 = (new Plate())
            ->setKz('DU')
            ->setName('Duisburg')
            ->setLat(51.4344079)
            ->setLng(6.7623293);
        $manager->persist($p55);

        $p56 = (new Plate())
            ->setKz('E')
            ->setName('Essen')
            ->setLat(51.4556432)
            ->setLng(7.0115552);
        $manager->persist($p56);

        $p57 = (new Plate())
            ->setKz('EBE')
            ->setName('Ebersberg')
            ->setLat(48.0780006)
            ->setLng(11.9669667);
        $manager->persist($p57);

        $p58 = (new Plate())
            ->setKz('EL')
            ->setName('Lingen')
            ->setLat(52.52306)
            ->setLng(7.323279);
        $manager->persist($p58);

        $p59 = (new Plate())
            ->setKz('EM')
            ->setName('Emmerdingen')
            ->setLat(48.1170918)
            ->setLng(7.8539047);
        $manager->persist($p59);

        $p60 = (new Plate())
            ->setKz('EMS')
            ->setName('Bad Ems')
            ->setLat(50.3340619)
            ->setLng(7.71924);
        $manager->persist($p60);

        $p61 = (new Plate())
            ->setKz('EN')
            ->setName('Ennepe-Ruhr-Kreis')
            ->setLat(51.3001092)
            ->setLng(7.3613429);
        $manager->persist($p61);

        $p62 = (new Plate())
            ->setKz('ERZ')
            ->setName('Erzgebirgskreis')
            ->setLat(50.731240)
            ->setLng(12.891083);
        $manager->persist($p62);

        $p63 = (new Plate())
            ->setKz('ES')
            ->setName('Esslingen')
            ->setLat(48.7433425)
            ->setLng(9.3201122);
        $manager->persist($p63);

        $p64 = (new Plate())
            ->setKz('ESW')
            ->setName('Eschwege')
            ->setLat(51.1876662)
            ->setLng(10.0397725);
        $manager->persist($p64);

        $p65 = (new Plate())
            ->setKz('EU')
            ->setName('Euskirchen')
            ->setLat(50.6574392)
            ->setLng(6.7899945);
        $manager->persist($p65);

        $p66 = (new Plate())
            ->setKz('F')
            ->setName('Frankfurt am Main')
            ->setLat(50.1109221)
            ->setLng(8.6821267);
        $manager->persist($p66);

        $p67 = (new Plate())
            ->setKz('FB')
            ->setName('Friedberg / Ts.')
            ->setLat(50.333333)
            ->setLng(8.75);
        $manager->persist($p67);

        $p68 = (new Plate())
            ->setKz('FD')
            ->setName('Fulda')
            ->setLat(50.5558095)
            ->setLng(9.6808449);
        $manager->persist($p68);

        $p69 = (new Plate())
            ->setKz('FKB')
            ->setName('Frankenberg (Eder)')
            ->setLat(51.058889)
            ->setLng(8.796667);
        $manager->persist($p69);

        $p70 = (new Plate())
            ->setKz('FR (AT)')
            ->setName('Freistadt')
            ->setLat(48.502170)
            ->setLng(14.502010);
        $manager->persist($p70);

        $p71 = (new Plate())
            ->setKz('FRI')
            ->setName('Friesland')
            ->setLat(53.596679)
            ->setLng(7.90034);
        $manager->persist($p71);

        $p72 = (new Plate())
            ->setKz('GAN')
            ->setName('Bad Gandersheim')
            ->setLat(51.8717977)
            ->setLng(10.023903);
        $manager->persist($p72);

        $p73 = (new Plate())
            ->setKz('GE')
            ->setName('Gelsenkirchen')
            ->setLat(51.517744)
            ->setLng(7.0857172);
        $manager->persist($p73);

        $p74 = (new Plate())
            ->setKz('GEL')
            ->setName('Geldern')
            ->setLat(51.5204439)
            ->setLng(6.3257902);
        $manager->persist($p74);

        $p75 = (new Plate())
            ->setKz('GER')
            ->setName('Germersheim')
            ->setLat(49.2140244)
            ->setLng(8.3668146);
        $manager->persist($p75);

        $p76 = (new Plate())
            ->setKz('GF')
            ->setName('Gifhorn')
            ->setLat(52.4809091)
            ->setLng(10.5507829);
        $manager->persist($p76);

        $p77 = (new Plate())
            ->setKz('GG')
            ->setName('Groß-Gerau')
            ->setLat(49.9203655)
            ->setLng(8.4847038);
        $manager->persist($p77);

        $p78 = (new Plate())
            ->setKz('GI')
            ->setName('Gießen')
            ->setLat(50.5840512)
            ->setLng(8.6784031);
        $manager->persist($p78);

        $p79 = (new Plate())
            ->setKz('GK')
            ->setName('Geilenkirchen')
            ->setLat(50.967168)
            ->setLng(6.1174584);
        $manager->persist($p79);

        $p80 = (new Plate())
            ->setKz('GL')
            ->setName('Bergisch Gladbach')
            ->setLat(50.9923091)
            ->setLng(7.1286213);
        $manager->persist($p80);

        $p81 = (new Plate())
            ->setKz('GLA')
            ->setName('Gladbeck')
            ->setLat(51.5706624)
            ->setLng(6.9853921);
        $manager->persist($p81);

        $p82 = (new Plate())
            ->setKz('GM')
            ->setName('Gummersbach')
            ->setLat(51.0266668)
            ->setLng(7.569283);
        $manager->persist($p82);

        $p83 = (new Plate())
            ->setKz('GOA')
            ->setName('Sankt Goar')
            ->setLat(50.1512782)
            ->setLng(7.7131202);
        $manager->persist($p83);

        $p84 = (new Plate())
            ->setKz('GP')
            ->setName('Göppingen')
            ->setLat(48.7054382)
            ->setLng(9.6512491);
        $manager->persist($p84);

        $p85 = (new Plate())
            ->setKz('GS')
            ->setName('Goslar')
            ->setLat(51.9059531)
            ->setLng(10.4289963);
        $manager->persist($p85);

        $p86 = (new Plate())
            ->setKz('GT')
            ->setName('Gütersloh')
            ->setLat(51.9032375)
            ->setLng(8.3857535);
        $manager->persist($p86);

        $p87 = (new Plate())
            ->setKz('GW')
            ->setName('Greifswald')
            ->setLat(54.0865463)
            ->setLng(13.3923414);
        $manager->persist($p87);

        $p88 = (new Plate())
            ->setKz('GÖ')
            ->setName('Göttingen')
            ->setLat(51.5412804)
            ->setLng(9.9158035);
        $manager->persist($p88);

        $p89 = (new Plate())
            ->setKz('H')
            ->setName('Hannover')
            ->setLat(52.3758916)
            ->setLng(9.7320104);
        $manager->persist($p89);

        $p90 = (new Plate())
            ->setKz('HA')
            ->setName('Hagen')
            ->setLat(51.3670777)
            ->setLng(7.4632841);
        $manager->persist($p90);

        $p91 = (new Plate())
            ->setKz('HAL')
            ->setName('Halle')
            ->setLat(51.4969802)
            ->setLng(11.9688029);
        $manager->persist($p91);

        $p92 = (new Plate())
            ->setKz('HAM')
            ->setName('Hamm')
            ->setLat(51.6738583)
            ->setLng(7.8159816);
        $manager->persist($p92);

        $p93 = (new Plate())
            ->setKz('HB')
            ->setName('Bremen')
            ->setLat(53.0792962)
            ->setLng(8.8016937);
        $manager->persist($p93);

        $p94 = (new Plate())
            ->setKz('HD')
            ->setName('Heidelberg')
            ->setLat(49.3987524)
            ->setLng(8.6724335);
        $manager->persist($p94);

        $p95 = (new Plate())
            ->setKz('HER')
            ->setName('Herne')
            ->setLat(51.5368948)
            ->setLng(7.2009147);
        $manager->persist($p95);

        $p96 = (new Plate())
            ->setKz('HF')
            ->setName('Herford')
            ->setLat(52.1178305)
            ->setLng(8.6793998);
        $manager->persist($p96);

        $p97 = (new Plate())
            ->setKz('HG')
            ->setName('Bad Homburg v.d. Höhe')
            ->setLat(50.226831)
            ->setLng(8.618162);
        $manager->persist($p97);

        $p98 = (new Plate())
            ->setKz('HGN')
            ->setName('Hagenow')
            ->setLat(53.4265906)
            ->setLng(11.1955099);
        $manager->persist($p98);

        $p99 = (new Plate())
            ->setKz('HH')
            ->setName('Hamburg')
            ->setLat(53.551085)
            ->setLng(9.993682);
        $manager->persist($p99);

        $p100 = (new Plate())
            ->setKz('HK')
            ->setName('Heidekreis')
            ->setLat(53.066498)
            ->setLng(9.882525);
        $manager->persist($p100);

        $p101 = (new Plate())
            ->setKz('HL')
            ->setName('Lübeck')
            ->setLat(53.8654673)
            ->setLng(10.6865593);
        $manager->persist($p101);

        $p102 = (new Plate())
            ->setKz('HM')
            ->setName('Hameln')
            ->setLat(52.1082726)
            ->setLng(9.362171);
        $manager->persist($p102);

        $p103 = (new Plate())
            ->setKz('HMÜ')
            ->setName('Hannover-Münden')
            ->setLat(51.419285)
            ->setLng(9.6557588);
        $manager->persist($p103);

        $p104 = (new Plate())
            ->setKz('HN')
            ->setName('Heilbronn')
            ->setLat(49.1426929)
            ->setLng(9.210879);
        $manager->persist($p104);

        $p106 = (new Plate())
            ->setKz('HOL')
            ->setName('Holzminden')
            ->setLat(51.8238111)
            ->setLng(9.4558926);
        $manager->persist($p106);

        $p107 = (new Plate())
            ->setKz('HOT')
            ->setName('Hohenstein-Ernstthal')
            ->setLat(50.8009829)
            ->setLng(12.7132681);
        $manager->persist($p107);

        $p108 = (new Plate())
            ->setKz('HP')
            ->setName('Heppenheim')
            ->setLat(49.643056)
            ->setLng(8.638889);
        $manager->persist($p108);

        $p109 = (new Plate())
            ->setKz('HR')
            ->setName('Homberg (Efze)')
            ->setLat(51.033056)
            ->setLng(9.4);
        $manager->persist($p109);

        $p110 = (new Plate())
            ->setKz('HS')
            ->setName('Heinsberg')
            ->setLat(51.0600381)
            ->setLng(6.1183729);
        $manager->persist($p110);

        $p111 = (new Plate())
            ->setKz('HSK')
            ->setName('Hochsauerlandkreis')
            ->setLat(51.2609835)
            ->setLng(8.04754842902168);
        $manager->persist($p111);

        $p112 = (new Plate())
            ->setKz('HU')
            ->setName('Hanau')
            ->setLat(50.1264123)
            ->setLng(8.9283105);
        $manager->persist($p112);

        $p113 = (new Plate())
            ->setKz('HVL')
            ->setName('Havelland')
            ->setLat(52.597902)
            ->setLng(12.520413);
        $manager->persist($p113);

        $p114 = (new Plate())
            ->setKz('HX')
            ->setName('Höxter')
            ->setLat(51.7774678)
            ->setLng(9.3771214);
        $manager->persist($p114);

        $p115 = (new Plate())
            ->setKz('J')
            ->setName('Jena')
            ->setLat(50.927054)
            ->setLng(11.5892372);
        $manager->persist($p115);

        $p116 = (new Plate())
            ->setKz('K')
            ->setName('Köln')
            ->setLat(50.937193)
            ->setLng(6.961422);
        $manager->persist($p116);

        $p117 = (new Plate())
            ->setKz('KA')
            ->setName('Karlsruhe')
            ->setLat(49.0068901)
            ->setLng(8.4036527);
        $manager->persist($p117);

        $p118 = (new Plate())
            ->setKz('KEH')
            ->setName('Kelheim')
            ->setLat(48.9184118)
            ->setLng(11.886563);
        $manager->persist($p118);

        $p119 = (new Plate())
            ->setKz('KK')
            ->setName('Kempen-Krefeld')
            ->setLat(51.3649942)
            ->setLng(6.4205309);
        $manager->persist($p119);

        $p120 = (new Plate())
            ->setKz('KLE')
            ->setName('Kleve')
            ->setLat(51.786726)
            ->setLng(6.12954);
        $manager->persist($p120);

        $p121 = (new Plate())
            ->setKz('KO')
            ->setName('Koblenz')
            ->setLat(50.3569429)
            ->setLng(7.5889959);
        $manager->persist($p121);

        $p122 = (new Plate())
            ->setKz('KR')
            ->setName('Krefeld')
            ->setLat(51.3387609)
            ->setLng(6.5853417);
        $manager->persist($p122);

        $p123 = (new Plate())
            ->setKz('KS')
            ->setName('Kassel')
            ->setLat(51.3127114)
            ->setLng(9.4797461);
        $manager->persist($p123);

        $p124 = (new Plate())
            ->setKz('KW')
            ->setName('Königs Wusterhausen')
            ->setLat(52.2958906)
            ->setLng(13.6228382);
        $manager->persist($p124);

        $p125 = (new Plate())
            ->setKz('KÖN')
            ->setName('Rhön-Grabfeld')
            ->setLat(50.355694)
            ->setLng(10.206667);
        $manager->persist($p125);

        $p126 = (new Plate())
            ->setKz('L')
            ->setName('Leipzig')
            ->setLat(51.3396955)
            ->setLng(12.3730747);
        $manager->persist($p126);

        $p127 = (new Plate())
            ->setKz('L (AT)')
            ->setName('Linz')
            ->setLat(48.30694)
            ->setLng(14.28583);
        $manager->persist($p127);

        $p128 = (new Plate())
            ->setKz('L (Luxembourg)')
            ->setName('Keine Zuordnung durch Kennzeichen möglich')
            ->setLat(49.815273)
            ->setLng(6.129583);
        $manager->persist($p128);

        $p129 = (new Plate())
            ->setKz('LB')
            ->setName('Ludwigsburg')
            ->setLat(48.8940624)
            ->setLng(9.195464);
        $manager->persist($p129);

        $p130 = (new Plate())
            ->setKz('LDK')
            ->setName('Lahn-Dill-Kreis')
            ->setLat(50.67097)
            ->setLng(8.358588);
        $manager->persist($p130);

        $p131 = (new Plate())
            ->setKz('LER')
            ->setName('Leer')
            ->setLat(53.235657)
            ->setLng(7.4679018);
        $manager->persist($p131);

        $p132 = (new Plate())
            ->setKz('LEV')
            ->setName('Leverkusen')
            ->setLat(51.0459248)
            ->setLng(7.0192196);
        $manager->persist($p132);

        $p133 = (new Plate())
            ->setKz('LG')
            ->setName('Lüneburg')
            ->setLat(53.2464214)
            ->setLng(10.4115179);
        $manager->persist($p133);

        $p134 = (new Plate())
            ->setKz('LH')
            ->setName('Lüdinghausen')
            ->setLat(51.768214)
            ->setLng(7.4465617);
        $manager->persist($p134);

        $p135 = (new Plate())
            ->setKz('LIP')
            ->setName('Lippe')
            ->setLat(51.975903)
            ->setLng(8.986528);
        $manager->persist($p135);

        $p136 = (new Plate())
            ->setKz('LL')
            ->setName('Landsberg am Lech')
            ->setLat(48.050783)
            ->setLng(10.8703515);
        $manager->persist($p136);

        $p137 = (new Plate())
            ->setKz('LM')
            ->setName('Limburg an der Lahn')
            ->setLat(50.4859255)
            ->setLng(8.2722569);
        $manager->persist($p137);

        $p138 = (new Plate())
            ->setKz('LÖ')
            ->setName('Lörrach')
            ->setLat(47.6169191)
            ->setLng(7.6709248);
        $manager->persist($p138);

        $p139 = (new Plate())
            ->setKz('LÖB')
            ->setName('Löbau')
            ->setLat(51.0962292)
            ->setLng(14.6701781);
        $manager->persist($p139);

        $p140 = (new Plate())
            ->setKz('LOS')
            ->setName('Oder-Spree')
            ->setLat(52.360438)
            ->setLng(14.059511);
        $manager->persist($p140);

        $p141 = (new Plate())
            ->setKz('LP')
            ->setName('Lippstadt')
            ->setLat(51.6712278)
            ->setLng(8.3406481);
        $manager->persist($p141);

        $p142 = (new Plate())
            ->setKz('LR')
            ->setName('Lahr')
            ->setLat(48.333333)
            ->setLng(7.866667);
        $manager->persist($p142);

        $p143 = (new Plate())
            ->setKz('LU')
            ->setName('Ludwigshafen am Rhein')
            ->setLat(49.47741)
            ->setLng(8.44518);
        $manager->persist($p143);

        $p144 = (new Plate())
            ->setKz('LÜN')
            ->setName('Lünen')
            ->setLat(51.6104829)
            ->setLng(7.5285074);
        $manager->persist($p144);

        $p145 = (new Plate())
            ->setKz('M')
            ->setName('München')
            ->setLat(48.135125)
            ->setLng(11.581981);
        $manager->persist($p145);

        $p146 = (new Plate())
            ->setKz('MD')
            ->setName('Magdeburg')
            ->setLat(52.1205333)
            ->setLng(11.6276237);
        $manager->persist($p146);

        $p147 = (new Plate())
            ->setKz('ME')
            ->setName('Mettmann')
            ->setLat(51.2506663)
            ->setLng(6.9740265);
        $manager->persist($p147);

        $p148 = (new Plate())
            ->setKz('MEL')
            ->setName('Melle')
            ->setLat(52.2033222)
            ->setLng(8.3372664);
        $manager->persist($p148);

        $p149 = (new Plate())
            ->setKz('MER')
            ->setName('Merseburg')
            ->setLat(51.3563278)
            ->setLng(11.9917462);
        $manager->persist($p149);

        $p150 = (new Plate())
            ->setKz('MG')
            ->setName('Mönchengladbach')
            ->setLat(51.1804572)
            ->setLng(6.4428041);
        $manager->persist($p150);

        $p151 = (new Plate())
            ->setKz('MI')
            ->setName('Minden-Lübbecke')
            ->setLat(52.335154)
            ->setLng(8.762342);
        $manager->persist($p151);

        $p152 = (new Plate())
            ->setKz('MI (AT)')
            ->setName('Mistelbach')
            ->setLat(48.5667)
            ->setLng(16.5667);
        $manager->persist($p152);

        $p153 = (new Plate())
            ->setKz('MK')
            ->setName('Märkischer Kreis')
            ->setLat(51.243977)
            ->setLng(7.755536);
        $manager->persist($p153);

        $p154 = (new Plate())
            ->setKz('ML')
            ->setName('Mansfeld-Südharz')
            ->setLat(51.550941)
            ->setLng(11.407180);
        $manager->persist($p154);

        $p155 = (new Plate())
            ->setKz('MN')
            ->setName('Mindelheim')
            ->setLat(48.0461744)
            ->setLng(10.4948841);
        $manager->persist($p155);

        $p156 = (new Plate())
            ->setKz('MO')
            ->setName('Moers')
            ->setLat(51.4516041)
            ->setLng(6.6408148);
        $manager->persist($p156);

        $p157 = (new Plate())
            ->setKz('MON')
            ->setName('Monschau')
            ->setLat(50.5563349)
            ->setLng(6.2426261);
        $manager->persist($p157);

        $p158 = (new Plate())
            ->setKz('MQ')
            ->setName('Merseburg-Querfurt')
            ->setLat(51.3812676)
            ->setLng(11.6041294);
        $manager->persist($p158);

        $p159 = (new Plate())
            ->setKz('MR')
            ->setName('Marburg')
            ->setLat(50.8021728)
            ->setLng(8.7667933);
        $manager->persist($p159);

        $p160 = (new Plate())
            ->setKz('MS')
            ->setName('Münster')
            ->setLat(51.9606649)
            ->setLng(7.6261347);
        $manager->persist($p160);

        $p161 = (new Plate())
            ->setKz('MSH')
            ->setName('Mansfeld-Südharz')
            ->setLat(51.550941)
            ->setLng(11.407180);
        $manager->persist($p161);

        $p162 = (new Plate())
            ->setKz('MTK')
            ->setName('Main-Taunus-Kreis')
            ->setLat(50.133333)
            ->setLng(8.533333);
        $manager->persist($p162);

        $p163 = (new Plate())
            ->setKz('MZ')
            ->setName('Mainz')
            ->setLat(49.9928617)
            ->setLng(8.2472526);
        $manager->persist($p163);

        $p164 = (new Plate())
            ->setKz('MZG')
            ->setName('Merzig')
            ->setLat(49.457240)
            ->setLng(6.686688);
        $manager->persist($p164);

        $p165 = (new Plate())
            ->setKz('NES')
            ->setName('Rhön-Grabfeld')
            ->setLat(50.355694)
            ->setLng(10.206667);
        $manager->persist($p165);

        $p166 = (new Plate())
            ->setKz('NEW')
            ->setName('Neustadt an der Waldnaab')
            ->setLat(49.732096)
            ->setLng(12.178127);
        $manager->persist($p166);

        $p167 = (new Plate())
            ->setKz('NF')
            ->setName('Nordfriesland')
            ->setLat(54.676022)
            ->setLng(8.933632);
        $manager->persist($p167);

        $p168 = (new Plate())
            ->setKz('NI')
            ->setName('Nienburg (Weser)')
            ->setLat(52.6380924)
            ->setLng(9.2084155);
        $manager->persist($p168);

        $p169 = (new Plate())
            ->setKz('NL (Niederlande)')
            ->setName('Keine Zuordnung durch Kennzeichen möglich')
            ->setLat(52.132633)
            ->setLng(5.291266);
        $manager->persist($p169);

        $p170 = (new Plate())
            ->setKz('NOH')
            ->setName('Nordhorn')
            ->setLat(52.4295801)
            ->setLng(7.0685708);
        $manager->persist($p170);

        $p171 = (new Plate())
            ->setKz('NOR')
            ->setName('Norden')
            ->setLat(53.576853)
            ->setLng(7.164472);
        $manager->persist($p171);

        $p172 = (new Plate())
            ->setKz('NR')
            ->setName('Neuwied')
            ->setLat(50.4361866)
            ->setLng(7.4664546);
        $manager->persist($p172);

        $p173 = (new Plate())
            ->setKz('OA')
            ->setName('Oberallgäu')
            ->setLat(47.539197)
            ->setLng(10.284402);
        $manager->persist($p173);

        $p174 = (new Plate())
            ->setKz('OAL')
            ->setName('Ostallgäu')
            ->setLat(47.786013)
            ->setLng(10.630515);
        $manager->persist($p174);

        $p175 = (new Plate())
            ->setKz('OB')
            ->setName('Oberhausen')
            ->setLat(51.4963341)
            ->setLng(6.8637765);
        $manager->persist($p175);

        $p176 = (new Plate())
            ->setKz('OF')
            ->setName('Offenbach am Main')
            ->setLat(50.0956362)
            ->setLng(8.7760843);
        $manager->persist($p176);

        $p177 = (new Plate())
            ->setKz('OH')
            ->setName('Ostholstein')
            ->setLat(54.164203)
            ->setLng(10.850424);
        $manager->persist($p177);

        $p178 = (new Plate())
            ->setKz('OL')
            ->setName('Oldenburg')
            ->setLat(53.1434501)
            ->setLng(8.2145521);
        $manager->persist($p178);

        $p179 = (new Plate())
            ->setKz('OP')
            ->setName('Opladen')
            ->setLat(51.0459248)
            ->setLng(7.0192196);
        $manager->persist($p179);

        $p180 = (new Plate())
            ->setKz('OS')
            ->setName('Osnabrück')
            ->setLat(52.2799112)
            ->setLng(8.0471788);
        $manager->persist($p180);

        $p181 = (new Plate())
            ->setKz('PB')
            ->setName('Paderborn')
            ->setLat(51.7189205)
            ->setLng(8.7575093);
        $manager->persist($p181);

        $p182 = (new Plate())
            ->setKz('PE')
            ->setName('Peine')
            ->setLat(52.3204095)
            ->setLng(10.243267);
        $manager->persist($p182);

        $p183 = (new Plate())
            ->setKz('PI')
            ->setName('Pinneberg')
            ->setLat(53.6545225)
            ->setLng(9.7938212);
        $manager->persist($p183);

        $p184 = (new Plate())
            ->setKz('PLÖ')
            ->setName('Plön')
            ->setLat(54.1613302)
            ->setLng(10.4259498);
        $manager->persist($p184);

        $p185 = (new Plate())
            ->setKz('PRÜ')
            ->setName('Prüm')
            ->setLat(50.208237)
            ->setLng(6.4197005);
        $manager->persist($p185);

        $p186 = (new Plate())
            ->setKz('PS')
            ->setName('Pirmasens')
            ->setLat(49.201555)
            ->setLng(7.6002161);
        $manager->persist($p186);

        $p187 = (new Plate())
            ->setKz('RA')
            ->setName('Rastatt')
            ->setLat(48.8591174)
            ->setLng(8.2059096);
        $manager->persist($p187);

        $p188 = (new Plate())
            ->setKz('RD')
            ->setName('Rendsburg')
            ->setLat(54.295275)
            ->setLng(9.846645);
        $manager->persist($p188);

        $p189 = (new Plate())
            ->setKz('RE')
            ->setName('Recklinghausen')
            ->setLat(51.6140649)
            ->setLng(7.1979453);
        $manager->persist($p189);

        $p190 = (new Plate())
            ->setKz('RH')
            ->setName('Roth')
            ->setLat(49.252047)
            ->setLng(11.091189);
        $manager->persist($p190);

        $p191 = (new Plate())
            ->setKz('RI')
            ->setName('Rinteln')
            ->setLat(52.2020461)
            ->setLng(9.0759703);
        $manager->persist($p191);

        $p192 = (new Plate())
            ->setKz('RN')
            ->setName('Rathenow')
            ->setLat(52.6048117)
            ->setLng(12.337945);
        $manager->persist($p192);

        $p193 = (new Plate())
            ->setKz('RO')
            ->setName('Rosenheim')
            ->setLat(47.8571272)
            ->setLng(12.1181047);
        $manager->persist($p193);

        $p194 = (new Plate())
            ->setKz('ROD')
            ->setName('Roding')
            ->setLat(49.1941496)
            ->setLng(12.5222943);
        $manager->persist($p194);

        $p195 = (new Plate())
            ->setKz('ROF')
            ->setName('Hersfeld-Rotenburg')
            ->setLat(50.898552)
            ->setLng(9.739876);
        $manager->persist($p195);

        $p196 = (new Plate())
            ->setKz('ROK')
            ->setName('Rockenhausen')
            ->setLat(49.6311747)
            ->setLng(7.8215535);
        $manager->persist($p196);

        $p197 = (new Plate())
            ->setKz('ROW')
            ->setName('Rotenburg (Wümme)')
            ->setLat(53.106944)
            ->setLng(9.396944);
        $manager->persist($p197);

        $p198 = (new Plate())
            ->setKz('RS')
            ->setName('Remscheid')
            ->setLat(51.1787418)
            ->setLng(7.1896962);
        $manager->persist($p198);

        $p199 = (new Plate())
            ->setKz('RW')
            ->setName('Rottweil')
            ->setLat(48.1610687)
            ->setLng(8.6316219);
        $manager->persist($p199);

        $p200 = (new Plate())
            ->setKz('S')
            ->setName('Stuttgart')
            ->setLat(48.7758459)
            ->setLng(9.1829321);
        $manager->persist($p200);

        $p201 = (new Plate())
            ->setKz('SE')
            ->setName('Bad Segeberg')
            ->setLat(53.9390528)
            ->setLng(10.3053651);
        $manager->persist($p201);

        $p202 = (new Plate())
            ->setKz('SEE')
            ->setName('Seelow')
            ->setLat(52.5315702)
            ->setLng(14.3798314);
        $manager->persist($p202);

        $p203 = (new Plate())
            ->setKz('SG')
            ->setName('Solingen')
            ->setLat(51.1702072)
            ->setLng(7.0831408);
        $manager->persist($p203);

        $p204 = (new Plate())
            ->setKz('SG (CH)')
            ->setName('St. Gallen')
            ->setLat(47.4244818)
            ->setLng(9.3767173);
        $manager->persist($p204);

        $p205 = (new Plate())
            ->setKz('SHG')
            ->setName('Schaumburg')
            ->setLat(52.190555555556)
            ->setLng(9.0813888888889);
        $manager->persist($p205);

        $p206 = (new Plate())
            ->setKz('SI')
            ->setName('Siegen')
            ->setLat(50.8838492)
            ->setLng(8.0209591);
        $manager->persist($p206);

        $p207 = (new Plate())
            ->setKz('SIG')
            ->setName('Sigmaringen')
            ->setLat(48.0912921)
            ->setLng(9.2286121);
        $manager->persist($p207);

        $p208 = (new Plate())
            ->setKz('SIM')
            ->setName('Simmern')
            ->setLat(49.983)
            ->setLng(7.517);
        $manager->persist($p208);

        $p209 = (new Plate())
            ->setKz('SL')
            ->setName('Schleswig-Flensburg')
            ->setLat(54.629896)
            ->setLng(9.534861);
        $manager->persist($p209);

        $p210 = (new Plate())
            ->setKz('SLS')
            ->setName('Saarlouis')
            ->setLat(49.3134606)
            ->setLng(6.7522865);
        $manager->persist($p210);

        $p211 = (new Plate())
            ->setKz('SN')
            ->setName('Schwerin')
            ->setLat(53.6355022)
            ->setLng(11.4012499);
        $manager->persist($p211);

        $p212 = (new Plate())
            ->setKz('SO')
            ->setName('Soest')
            ->setLat(51.5711476)
            ->setLng(8.105754);
        $manager->persist($p212);

        $p213 = (new Plate())
            ->setKz('SON')
            ->setName('Sonneberg')
            ->setLat(50.3601821)
            ->setLng(11.1709899);
        $manager->persist($p213);

        $p214 = (new Plate())
            ->setKz('SU')
            ->setName('Siegburg')
            ->setLat(50.7998473)
            ->setLng(7.2074514);
        $manager->persist($p214);

        $p215 = (new Plate())
            ->setKz('STA')
            ->setName('Starnberg')
            ->setLat(47.9999615)
            ->setLng(11.3390089);
        $manager->persist($p215);

        $p216 = (new Plate())
            ->setKz('STD')
            ->setName('Stade')
            ->setLat(53.5928618)
            ->setLng(9.4709494);
        $manager->persist($p216);

        $p217 = (new Plate())
            ->setKz('TDO')
            ->setName('Torgau')
            ->setLat(51.557934)
            ->setLng(12.991583);
        $manager->persist($p217);

        $p218 = (new Plate())
            ->setKz('TE')
            ->setName('Tecklenburg')
            ->setLat(52.2203039)
            ->setLng(7.8123633);
        $manager->persist($p218);

        $p219 = (new Plate())
            ->setKz('TF')
            ->setName('Teltow-Fläming')
            ->setLat(52.036416)
            ->setLng(13.292044);
        $manager->persist($p219);

        $p220 = (new Plate())
            ->setKz('UFF')
            ->setName('Uffenheim')
            ->setLat(49.5449973)
            ->setLng(10.2338007);
        $manager->persist($p220);

        $p221 = (new Plate())
            ->setKz('UH')
            ->setName('Unstrut-Hainich')
            ->setLat(51.19)
            ->setLng(10.55);
        $manager->persist($p221);

        $p222 = (new Plate())
            ->setKz('UN')
            ->setName('Unna')
            ->setLat(51.5426349)
            ->setLng(7.6853114);
        $manager->persist($p222);

        $p223 = (new Plate())
            ->setKz('V')
            ->setName('Vogtland-Kreis')
            ->setLat(50.616667)
            ->setLng(12.3);
        $manager->persist($p223);

        $p224 = (new Plate())
            ->setKz('VAI')
            ->setName('Vaihingen an der Enz')
            ->setLat(48.9334357)
            ->setLng(8.961208);
        $manager->persist($p224);

        $p225 = (new Plate())
            ->setKz('VB')
            ->setName('Vogelsberg-Kreis')
            ->setLat(50.640763888889)
            ->setLng(9.3997916666667);
        $manager->persist($p225);

        $p226 = (new Plate())
            ->setKz('VEC')
            ->setName('Vechta')
            ->setLat(52.7292252)
            ->setLng(8.2838761);
        $manager->persist($p226);

        $p227 = (new Plate())
            ->setKz('VIE')
            ->setName('Viersen')
            ->setLat(51.2554987)
            ->setLng(6.3965235);
        $manager->persist($p227);

        $p228 = (new Plate())
            ->setKz('VIT')
            ->setName('Viechtach')
            ->setLat(49.0794562)
            ->setLng(12.8831956);
        $manager->persist($p228);

        $p229 = (new Plate())
            ->setKz('W')
            ->setName('Wuppertal')
            ->setLat(51.2562128)
            ->setLng(7.1507636);
        $manager->persist($p229);

        $p230 = (new Plate())
            ->setKz('W (AT)')
            ->setName('Wien')
            ->setLat(48.208174)
            ->setLng(16.373819);
        $manager->persist($p230);

        $p231 = (new Plate())
            ->setKz('WA')
            ->setName('Waldeck-Frankenberg')
            ->setLat(51.222086)
            ->setLng(8.854924);
        $manager->persist($p231);

        $p232 = (new Plate())
            ->setKz('WAF')
            ->setName('Warendorf')
            ->setLat(51.9538685)
            ->setLng(7.9908987);
        $manager->persist($p232);

        $p233 = (new Plate())
            ->setKz('WAK')
            ->setName('Wartburgkreis')
            ->setLat(50.956714)
            ->setLng(10.497661);
        $manager->persist($p233);

        $p234 = (new Plate())
            ->setKz('WAN')
            ->setName('Wanne-Eickel')
            ->setLat(51.5368948)
            ->setLng(7.2009147);
        $manager->persist($p234);

        $p235 = (new Plate())
            ->setKz('WEL')
            ->setName('Limburg-Weilburg')
            ->setLat(50.4859255)
            ->setLng(8.2722569);
        $manager->persist($p235);

        $p236 = (new Plate())
            ->setKz('WES')
            ->setName('Wesel')
            ->setLat(51.6643079)
            ->setLng(6.6295679);
        $manager->persist($p236);

        $p237 = (new Plate())
            ->setKz('WF')
            ->setName('Wolfenbüttel')
            ->setLat(52.1640413)
            ->setLng(10.5408484);
        $manager->persist($p237);

        $p238 = (new Plate())
            ->setKz('WHV')
            ->setName('Wilhelmshaven')
            ->setLat(53.5323403)
            ->setLng(8.1068722);
        $manager->persist($p238);

        $p239 = (new Plate())
            ->setKz('WI')
            ->setName('Wiesbaden')
            ->setLat(50.0782184)
            ->setLng(8.2397608);
        $manager->persist($p239);

        $p240 = (new Plate())
            ->setKz('WIT')
            ->setName('Witten')
            ->setLat(51.4438926)
            ->setLng(7.353197);
        $manager->persist($p240);

        $p241 = (new Plate())
            ->setKz('WL')
            ->setName('Winsen (Luhe)')
            ->setLat(53.3574436)
            ->setLng(10.2127204);
        $manager->persist($p241);

        $p242 = (new Plate())
            ->setKz('WND')
            ->setName('St. Wendel')
            ->setLat(49.4677707)
            ->setLng(7.1690625);
        $manager->persist($p242);

        $p243 = (new Plate())
            ->setKz('WOB')
            ->setName('Wolfsburg')
            ->setLat(52.4226503)
            ->setLng(10.7865461);
        $manager->persist($p243);

        $p244 = (new Plate())
            ->setKz('WOH')
            ->setName('Wolfhagen')
            ->setLat(51.3264673)
            ->setLng(9.1710827);
        $manager->persist($p244);

        $p245 = (new Plate())
            ->setKz('WT')
            ->setName('Waldshut-Tiengen')
            ->setLat(47.6327253)
            ->setLng(8.2719155);
        $manager->persist($p245);

        $p246 = (new Plate())
            ->setKz('WUG')
            ->setName('Weißenburg-Gunzenhausen')
            ->setLat(49.052484)
            ->setLng(10.906240);
        $manager->persist($p246);

        $p247 = (new Plate())
            ->setKz('WW')
            ->setName('Westerwaldkreis')
            ->setLat(50.687222)
            ->setLng(7.645556);
        $manager->persist($p247);

        $p248 = (new Plate())
            ->setKz('ZI')
            ->setName('Zittau')
            ->setLat(50.8999681)
            ->setLng(14.8029971);
        $manager->persist($p248);

        $p249 = (new Plate())
            ->setKz('DE')
            ->setName('Dessau-Roßlau')
            ->setLat(51.8428278)
            ->setLng(12.2303935);
        $manager->persist($p249);

        $p250 = (new Plate())
            ->setKz('WIL')
            ->setName('Wittlich')
            ->setLat(49.9854178)
            ->setLng(6.8953377);
        $manager->persist($p250);

        $p251 = (new Plate())
            ->setKz('BOH')
            ->setName('Bocholt')
            ->setLat(51.8384277)
            ->setLng(6.6150917);
        $manager->persist($p251);

        $p252 = (new Plate())
            ->setKz('OHA')
            ->setName('Osterode am Harz')
            ->setLat(51.7293769)
            ->setLng(10.2580311);
        $manager->persist($p252);

        $p253 = (new Plate())
            ->setKz('MA')
            ->setName('Mannheim')
            ->setLat(49.4874592)
            ->setLng(8.4660395);
        $manager->persist($p253);

        $p254 = (new Plate())
            ->setKz('BC')
            ->setName('Biberach')
            ->setLat(48.0951473)
            ->setLng(9.7901525);
        $manager->persist($p254);

        $p255 = (new Plate())
            ->setKz('SR')
            ->setName('Straubing')
            ->setLat(48.8777333)
            ->setLng(12.5801538);
        $manager->persist($p255);

        $p256 = (new Plate())
            ->setKz('DUD')
            ->setName('Duderstadt')
            ->setLat(51.5096571)
            ->setLng(10.2535104);
        $manager->persist($p256);

        $p257 = (new Plate())
            ->setKz('AÖ')
            ->setName('Altötting')
            ->setLat(48.2246432)
            ->setLng(12.6767839);
        $manager->persist($p257);

        $p258 = (new Plate())
            ->setKz('EF')
            ->setName('Erfurt')
            ->setLat(50.9847679)
            ->setLng(11.0298799);
        $manager->persist($p258);

        $p259 = (new Plate())
            ->setKz('HE')
            ->setName('Helmstedt')
            ->setLat(52.228966)
            ->setLng(11.009544);
        $manager->persist($p259);

        $p260 = (new Plate())
            ->setKz('HI')
            ->setName('Hildesheim')
            ->setLat(52.154778)
            ->setLng(9.9579652);
        $manager->persist($p260);



        $manager->flush();
    }
}
