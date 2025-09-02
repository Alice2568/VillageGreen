<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $c1 = new Categorie();
        $c1 ->setNom("Guitare");
        $manager ->persist($c1);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Guitares électriques");
        $sc1 ->setImage("/img/guitareselectrique.png");
        $sc1 ->setCategorie($c1);
        $manager ->persist($sc1);

        $ge1 = new Produit();
        $ge1 ->setNom("Fender Stratocaster");
        $ge1 ->setImage("/img/Fenderstratocaster.jpg");
        $ge1 -> setActif(True);
        $ge1 -> setDescription("Magnifique guitare fender authentique");
        $ge1 ->setsousCategorie($sc1);
        $ge1 -> setPrixAchat(999.99);
        $ge1 -> setRefFournisseur("FS1568");
        $ge1 -> setStock(5);
        $manager ->persist($ge1);

        $ge2 = new Produit();
        $ge2->setNom("Fender Stratocaster American Pro II");
        $ge2->setImage("/img/fender_strat.png");
        $ge2->setActif(true);
        $ge2->setDescription("Fender Stratocaster haut de gamme, idéale pour le rock, funk et blues.");
        $ge2->setSousCategorie($sc1);
        $ge2->setPrixAchat(1799.99);
        $ge2->setRefFournisseur("FD1023");
        $ge2->setStock(5);
        $manager->persist($ge2);

        $ge3 = new Produit();
        $ge3->setNom("Gibson SG Standard");
        $ge3->setImage("/img/gibson_sg.png");
        $ge3->setActif(true);
        $ge3->setDescription("Classique Gibson SG, connue pour son sustain et son confort de jeu.");
        $ge3->setSousCategorie($sc1);
        $ge3->setPrixAchat(1499.99);
        $ge3->setRefFournisseur("GB2045");
        $ge3->setStock(3);
        $manager->persist($ge3);

        $ge4 = new Produit();
        $ge4->setNom("Ibanez RG550 Genesis");
        $ge4->setImage("/img/ibanez_rg550.png");
        $ge4->setActif(true);
        $ge4->setDescription("Modèle iconique pour le shred et le métal.");
        $ge4->setSousCategorie($sc1);
        $ge4->setPrixAchat(999.99);
        $ge4->setRefFournisseur("IB2254");
        $ge4->setStock(4);
        $manager->persist($ge4);

        $ge5 = new Produit();
        $ge5->setNom("PRS Custom 24");
        $ge5->setImage("/img/prs_custom24.png");
        $ge5->setActif(true);
        $ge5->setDescription("Paul Reed Smith Custom 24 avec finitions exceptionnelles.");
        $ge5->setSousCategorie($sc1);
        $ge5->setPrixAchat(3299.99);
        $ge5->setRefFournisseur("PRS4521");
        $ge5->setStock(2);
        $manager->persist($ge5);

        $ge6 = new Produit();
        $ge6->setNom("Jackson Soloist SL2");
        $ge6->setImage("/img/jackson_soloist.png");
        $ge6->setActif(true);
        $ge6->setDescription("Guitare Jackson idéale pour le métal avec micros actifs.");
        $ge6->setSousCategorie($sc1);
        $ge6->setPrixAchat(1299.99);
        $ge6->setRefFournisseur("JK3145");
        $ge6->setStock(3);
        $manager->persist($ge6);

        $ge7 = new Produit();
        $ge7 ->setNom("Gibson les paul standard");
        $ge7 ->setImage("/img/gibsonlespaul.png");
        $ge7 -> setActif(True);
        $ge7 -> setDescription("Magnifique guitare gibson authentique");
        $ge7 ->setsousCategorie($sc1);
        $ge7 -> setPrixAchat(2299.99);
        $ge7 -> setRefFournisseur("GB1568");
        $ge7 -> setStock(2);
        $manager ->persist($ge7);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Guitares acoustiques");
        $sc2 ->setImage("/img/guitaresacoustiques.png");
        $sc2 ->setCategorie($c1);
        $manager ->persist($sc2);

        $ga1 = new Produit();
        $ga1->setNom("Yamaha FG800");
        $ga1->setImage("/img/yamaha_fg800.png");
        $ga1->setActif(true);
        $ga1->setDescription("Guitare acoustique abordable et polyvalente.");
        $ga1->setSousCategorie($sc2);
        $ga1->setPrixAchat(229.99);
        $ga1->setRefFournisseur("YM8801");
        $ga1->setStock(10);
        $manager->persist($ga1);

        $ga2 = new Produit();
        $ga2->setNom("Taylor 214ce");
        $ga2->setImage("/img/taylor_214ce.png");
        $ga2->setActif(true);
        $ga2->setDescription("Taylor 214ce avec une sonorité cristalline et une grande projection.");
        $ga2->setSousCategorie($sc2);
        $ga2->setPrixAchat(1199.99);
        $ga2->setRefFournisseur("TY2145");
        $ga2->setStock(4);
        $manager->persist($ga2);

        $ga3 = new Produit();
        $ga3->setNom("Martin D-28");
        $ga3->setImage("/img/martin_d28.png");
        $ga3->setActif(true);
        $ga3->setDescription("Un classique de Martin, utilisé par de nombreux artistes folk.");
        $ga3->setSousCategorie($sc2);
        $ga3->setPrixAchat(2999.99);
        $ga3->setRefFournisseur("MTD2812");
        $ga3->setStock(2);
        $manager->persist($ga3);

        $ga4 = new Produit();
        $ga4->setNom("Gibson J-45");
        $ga4->setImage("/img/gibson_j45.png");
        $ga4->setActif(true);
        $ga4->setDescription("La Gibson J-45, une guitare acoustique de légende au son chaud et rond.");
        $ga4->setSousCategorie($sc2);
        $ga4->setPrixAchat(2499.99);
        $ga4->setRefFournisseur("GBJ4509");
        $ga4->setStock(3);
        $manager->persist($ga4);

        $ga5 = new Produit();
        $ga5->setNom("Takamine GD30");
        $ga5->setImage("/img/takamine_gd30.png");
        $ga5->setActif(true);
        $ga5->setDescription("Takamine GD30, acoustique fiable avec un excellent rapport qualité/prix.");
        $ga5->setSousCategorie($sc2);
        $ga5->setPrixAchat(399.99);
        $ga5->setRefFournisseur("TK3021");
        $ga5->setStock(6);
        $manager->persist($ga5);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Guitares classiques");
        $sc3 ->setImage("/img/guitaresclassiques.png");
        $sc3 ->setCategorie($c1);
        $manager ->persist($sc3);

        $gc1 = new Produit();
        $gc1->setNom("Yamaha C40");
        $gc1->setImage("/img/yamaha_c40.png");
        $gc1->setActif(true);
        $gc1->setDescription("Une guitare classique d'entrée de gamme idéale pour les débutants.");
        $gc1->setSousCategorie($sc3);
        $gc1->setPrixAchat(139.99);
        $gc1->setRefFournisseur("YM4012");
        $gc1->setStock(12);
        $manager->persist($gc1);

        $gc2 = new Produit();
        $gc2->setNom("Cordoba C5");
        $gc2->setImage("/img/cordoba_c5.png");
        $gc2->setActif(true);
        $gc2->setDescription("Cordoba C5 avec table en cèdre massif et sonorité chaleureuse.");
        $gc2->setSousCategorie($sc3);
        $gc2->setPrixAchat(349.99);
        $gc2->setRefFournisseur("CB5503");
        $gc2->setStock(6);
        $manager->persist($gc2);

        $gc3 = new Produit();
        $gc3->setNom("Alhambra 4P");
        $gc3->setImage("/img/alhambra_4p.png");
        $gc3->setActif(true);
        $gc3->setDescription("Guitare classique fabriquée en Espagne, très populaire chez les étudiants en conservatoire.");
        $gc3->setSousCategorie($sc3);
        $gc3->setPrixAchat(749.99);
        $gc3->setRefFournisseur("AL7841");
        $gc3->setStock(3);
        $manager->persist($gc3);

        $gc4 = new Produit();
        $gc4->setNom("Takamine GC5");
        $gc4->setImage("/img/takamine_gc5.png");
        $gc4->setActif(true);
        $gc4->setDescription("Takamine GC5, une guitare classique élégante avec une belle projection sonore.");
        $gc4->setSousCategorie($sc3);
        $gc4->setPrixAchat(429.99);
        $gc4->setRefFournisseur("TK6305");
        $gc4->setStock(5);
        $manager->persist($gc4);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("basses");
        $sc4 ->setImage("/img/basses.png");
        $sc4 ->setCategorie($c1);
        $manager ->persist($sc4);

        $gb1 = new Produit();
        $gb1->setNom("Fender Precision Bass Player");
        $gb1->setImage("/img/fender_pbass.png");
        $gb1->setActif(true);
        $gb1->setDescription("La basse Fender Precision, modèle emblématique utilisé dans tous les styles.");
        $gb1->setSousCategorie($sc4);
        $gb1->setPrixAchat(799.99);
        $gb1->setRefFournisseur("FD3451");
        $gb1->setStock(5);
        $manager->persist($gb1);

        $gb2 = new Produit();
        $gb2->setNom("Music Man StingRay Special");
        $gb2->setImage("/img/musicman_stingray.png");
        $gb2->setActif(true);
        $gb2->setDescription("Une basse haut de gamme, très polyvalente, avec une électronique active.");
        $gb2->setSousCategorie($sc4);
        $gb2->setPrixAchat(2199.99);
        $gb2->setRefFournisseur("MM5621");
        $gb2->setStock(2);
        $manager->persist($gb2);

        $gb3 = new Produit();
        $gb3->setNom("Ibanez SR500E");
        $gb3->setImage("/img/ibanez_sr500.png");
        $gb3->setActif(true);
        $gb3->setDescription("Basse légère et confortable, parfaite pour le funk et le jazz.");
        $gb3->setSousCategorie($sc4);
        $gb3->setPrixAchat(899.99);
        $gb3->setRefFournisseur("IB5123");
        $gb3->setStock(4);
        $manager->persist($gb3);

        $gb4 = new Produit();
        $gb4->setNom("Yamaha BB734A");
        $gb4->setImage("/img/yamaha_bb734a.png");
        $gb4->setActif(true);
        $gb4->setDescription("Basse Yamaha BB avec une construction robuste et un son punchy.");
        $gb4->setSousCategorie($sc4);
        $gb4->setPrixAchat(799.99);
        $gb4->setRefFournisseur("YM7348");
        $gb4->setStock(3);
        $manager->persist($gb4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Ukulélés");
        $sc5 ->setImage("/img/ukulélés.png");
        $sc5 ->setCategorie($c1);
        $manager ->persist($sc5);

        $gu1 = new Produit();
        $gu1->setNom("Kala KA-15S Soprano");
        $gu1->setImage("/img/kala_ka15s.png");
        $gu1->setActif(true);
        $gu1->setDescription("Ukulélé soprano Kala KA-15S, parfait pour les débutants.");
        $gu1->setSousCategorie($sc5);
        $gu1->setPrixAchat(79.99);
        $gu1->setRefFournisseur("KA1501");
        $gu1->setStock(8);
        $manager->persist($gu1);

        $gu2 = new Produit();
        $gu2->setNom("Lanikai LU-21C Concert");
        $gu2->setImage("/img/lanikai_lu21c.png");
        $gu2->setActif(true);
        $gu2->setDescription("Ukulélé concert Lanikai LU-21C avec une sonorité chaude et claire.");
        $gu2->setSousCategorie($sc5);
        $gu2->setPrixAchat(129.99);
        $gu2->setRefFournisseur("LN2102");
        $gu2->setStock(5);
        $manager->persist($gu2);

        $c2 = new Categorie();
        $c2 ->setNom("Percussions");
        $manager ->persist($c2);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Batteries acoustiques");
        $sc1 ->setImage("/img/batteries_acoustiques.png");
        $sc1 ->setCategorie($c2);
        $manager ->persist($sc1);

        $ba1 = new Produit();
$ba1->setNom("Pearl Export EXX725SP");
$ba1->setImage("/img/pearl_export.png");
$ba1->setActif(true);
$ba1->setDescription("Batterie Pearl Export EXX725SP, idéale pour les batteurs intermédiaires.");
$ba1->setSousCategorie($sc1);
$ba1->setPrixAchat(799.99);
$ba1->setRefFournisseur("PR4521");
$ba1->setStock(4);
$manager->persist($ba1);

$ba2 = new Produit();
$ba2->setNom("Yamaha Stage Custom Birch");
$ba2->setImage("/img/yamaha_stagecustom.png");
$ba2->setActif(true);
$ba2->setDescription("Yamaha Stage Custom Birch, son puissant et clair, parfait pour la scène.");
$ba2->setSousCategorie($sc1);
$ba2->setPrixAchat(999.99);
$ba2->setRefFournisseur("YM6234");
$ba2->setStock(3);
$manager->persist($ba2);

$ba3 = new Produit();
$ba3->setNom("Tama Imperialstar 22");
$ba3->setImage("/img/tama_imperialstar.png");
$ba3->setActif(true);
$ba3->setDescription("Tama Imperialstar 22, idéale pour les débutants et avancés.");
$ba3->setSousCategorie($sc1);
$ba3->setPrixAchat(699.99);
$ba3->setRefFournisseur("TM3321");
$ba3->setStock(6);
$manager->persist($ba3);

$ba4 = new Produit();
$ba4->setNom("Gretsch Catalina Maple");
$ba4->setImage("/img/gretsch_catalina.png");
$ba4->setActif(true);
$ba4->setDescription("Gretsch Catalina Maple, batterie haut de gamme avec un son chaleureux.");
$ba4->setSousCategorie($sc1);
$ba4->setPrixAchat(1199.99);
$ba4->setRefFournisseur("GR1289");
$ba4->setStock(2);
$manager->persist($ba4);

$ba5 = new Produit();
$ba5->setNom("Ludwig Breakbeats Questlove");
$ba5->setImage("/img/ludwig_breakbeats.png");
$ba5->setActif(true);
$ba5->setDescription("Ludwig Breakbeats, batterie compacte créée avec Questlove, idéale pour le live et le transport.");
$ba5->setSousCategorie($sc1);
$ba5->setPrixAchat(499.99);
$ba5->setRefFournisseur("LD7851");
$ba5->setStock(5);
$manager->persist($ba5);


        $sc2 = new SousCategorie();
        $sc2 ->setNom("Batteries électroniques");
        $sc2 ->setImage("/img/batteries_électroniques.png");
        $sc2 ->setCategorie($c2);
        $manager ->persist($sc2);

        $be1 = new Produit();
$be1->setNom("Roland TD-1DMK");
$be1->setImage("/img/roland_td1dmk.png");
$be1->setActif(true);
$be1->setDescription("Roland TD-1DMK, batterie électronique compacte avec pads en mesh.");
$be1->setSousCategorie($sc2);
$be1->setPrixAchat(649.99);
$be1->setRefFournisseur("RL1021");
$be1->setStock(6);
$manager->persist($be1);

$be2 = new Produit();
$be2->setNom("Alesis Nitro Mesh Kit");
$be2->setImage("/img/alesis_nitro.png");
$be2->setActif(true);
$be2->setDescription("Alesis Nitro Mesh, batterie électronique abordable et parfaite pour les débutants.");
$be2->setSousCategorie($sc2);
$be2->setPrixAchat(399.99);
$be2->setRefFournisseur("AL3321");
$be2->setStock(8);
$manager->persist($be2);

$be3 = new Produit();
$be3->setNom("Yamaha DTX402K");
$be3->setImage("/img/yamaha_dtx402k.png");
$be3->setActif(true);
$be3->setDescription("Yamaha DTX402K, batterie électronique avec plus de 280 sons et exercices intégrés.");
$be3->setSousCategorie($sc2);
$be3->setPrixAchat(459.99);
$be3->setRefFournisseur("YM4520");
$be3->setStock(7);
$manager->persist($be3);

$be4 = new Produit();
$be4->setNom("Roland TD-17KVX");
$be4->setImage("/img/roland_td17kvx.png");
$be4->setActif(true);
$be4->setDescription("Roland TD-17KVX, une batterie électronique haut de gamme avec pads réalistes.");
$be4->setSousCategorie($sc2);
$be4->setPrixAchat(1699.99);
$be4->setRefFournisseur("RL1788");
$be4->setStock(3);
$manager->persist($be4);

$be5 = new Produit();
$be5->setNom("Millenium MPS-850");
$be5->setImage("/img/millenium_mps850.png");
$be5->setActif(true);
$be5->setDescription("Millenium MPS-850, un excellent rapport qualité/prix avec pads double zone.");
$be5->setSousCategorie($sc2);
$be5->setPrixAchat(699.99);
$be5->setRefFournisseur("ML8502");
$be5->setStock(4);
$manager->persist($be5);


        $sc3 = new SousCategorie();
        $sc3 ->setNom("Percussions africaines");
        $sc3 ->setImage("/img/percussions_africaines.png");
        $sc3 ->setCategorie($c2);
        $manager ->persist($sc3);

        $pa1 = new Produit();
$pa1->setNom("Djembe en bois - 12 pouces");
$pa1->setImage("/img/djembe_12.png");
$pa1->setActif(true);
$pa1->setDescription("Djembé traditionnel africain en bois massif avec peau de chèvre.");
$pa1->setSousCategorie($sc3);
$pa1->setPrixAchat(149.99);
$pa1->setRefFournisseur("DJ1201");
$pa1->setStock(7);
$manager->persist($pa1);

$pa2 = new Produit();
$pa2->setNom("Cajón africain artisanal");
$pa2->setImage("/img/cajon_africain.png");
$pa2->setActif(true);
$pa2->setDescription("Cajón africain fabriqué à la main, idéal pour les rythmes traditionnels.");
$pa2->setSousCategorie($sc3);
$pa2->setPrixAchat(199.99);
$pa2->setRefFournisseur("CJ4520");
$pa2->setStock(5);
$manager->persist($pa2);


        $sc4 = new SousCategorie();
        $sc4 ->setNom("Percussions latines");
        $sc4 ->setImage("/img/percussions_latines.png");
        $sc4 ->setCategorie($c2);
        $manager ->persist($sc4);

        $pl1 = new Produit();
$pl1->setNom("Congas Latin Percussion Aspire");
$pl1->setImage("/img/congas_lp.png");
$pl1->setActif(true);
$pl1->setDescription("Jeu de congas Latin Percussion Aspire, parfait pour la salsa et les musiques latines.");
$pl1->setSousCategorie($sc4);
$pl1->setPrixAchat(499.99);
$pl1->setRefFournisseur("LP4521");
$pl1->setStock(3);
$manager->persist($pl1);

$pl2 = new Produit();
$pl2->setNom("Bongos Meinl Headliner");
$pl2->setImage("/img/bongos_meinl.png");
$pl2->setActif(true);
$pl2->setDescription("Bongos Meinl Headliner, son clair et puissant pour l’accompagnement rythmique.");
$pl2->setSousCategorie($sc4);
$pl2->setPrixAchat(149.99);
$pl2->setRefFournisseur("MN2145");
$pl2->setStock(6);
$manager->persist($pl2);


        $sc5 = new SousCategorie();
        $sc5 ->setNom("Accessoires percussions");
        $sc5 ->setImage("/img/accessoires_percussions.png");
        $sc5 ->setCategorie($c2);
        $manager ->persist($sc5);

        $c3 = new Categorie();
        $c3 ->setNom("claviers");
        $manager ->persist($c3);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Pianos acoustiques");
        $sc1 ->setImage("/img/pianos_acoustiques.png");
        $sc1 ->setCategorie($c3);
        $manager ->persist($sc1);

        $pa1 = new Produit();
$pa1->setNom("Yamaha U1");
$pa1->setImage("/img/yamaha_u1.png");
$pa1->setActif(true);
$pa1->setDescription("Piano droit Yamaha U1, un classique apprécié des pianistes professionnels.");
$pa1->setSousCategorie($sc1);
$pa1->setPrixAchat(8999.99);
$pa1->setRefFournisseur("YMU1001");
$pa1->setStock(2);
$manager->persist($pa1);

$pa2 = new Produit();
$pa2->setNom("Steinway & Sons Model D");
$pa2->setImage("/img/steinway_d.png");
$pa2->setActif(true);
$pa2->setDescription("Steinway Model D, piano à queue de concert d’exception.");
$pa2->setSousCategorie($sc1);
$pa2->setPrixAchat(149999.99);
$pa2->setRefFournisseur("STWD888");
$pa2->setStock(1);
$manager->persist($pa2);

$pa3 = new Produit();
$pa3->setNom("Kawai K-300");
$pa3->setImage("/img/kawai_k300.png");
$pa3->setActif(true);
$pa3->setDescription("Kawai K-300, piano droit moderne au toucher précis et puissant.");
$pa3->setSousCategorie($sc1);
$pa3->setPrixAchat(7499.99);
$pa3->setRefFournisseur("KWK3007");
$pa3->setStock(3);
$manager->persist($pa3);

$pa4 = new Produit();
$pa4->setNom("Bosendorfer 170VC");
$pa4->setImage("/img/bosendorfer_170vc.png");
$pa4->setActif(true);
$pa4->setDescription("Bosendorfer 170VC, piano à queue au son riche et expressif.");
$pa4->setSousCategorie($sc1);
$pa4->setPrixAchat(89999.99);
$pa4->setRefFournisseur("BSD170V");
$pa4->setStock(1);
$manager->persist($pa4);

$pa5 = new Produit();
$pa5->setNom("Petrof P125 G1");
$pa5->setImage("/img/petrof_p125.png");
$pa5->setActif(true);
$pa5->setDescription("Petrof P125, piano droit réputé pour son timbre chaleureux.");
$pa5->setSousCategorie($sc1);
$pa5->setPrixAchat(11999.99);
$pa5->setRefFournisseur("PTF125G");
$pa5->setStock(2);
$manager->persist($pa5);


        $sc2 = new SousCategorie();
        $sc2 ->setNom("Pianos numériques");
        $sc2 ->setImage("/img/pianos_numériques.png");
        $sc2 ->setCategorie($c3);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Synthétiseurs");
        $sc3 ->setImage("/img/synthétiseurs.png");
        $sc3 ->setCategorie($c3);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Claviers arrangeurs");
        $sc4 ->setImage("/img/claviers_arrangeurs.png");
        $sc4 ->setCategorie($c3);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Orgues");
        $sc5 ->setImage("/img/orgues.png");
        $sc5 ->setCategorie($c3);
        $manager ->persist($sc5);

        $c4 = new Categorie();
        $c4 ->setNom("Cuivres");
        $manager ->persist($c4);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Trompettes");
        $sc1 ->setImage("/img/trompettes.png");
        $sc1 ->setCategorie($c4);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Trombones");
        $sc2 ->setImage("/img/trombones.png");
        $sc2 ->setCategorie($c4);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Saxophones");
        $sc3 ->setImage("/img/Saxophones.png");
        $sc3 ->setCategorie($c4);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Tubas");
        $sc4 ->setImage("/img/tubas.png");
        $sc4 ->setCategorie($c4);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Cors");
        $sc5 ->setImage("/img/cors.png");
        $sc5 ->setCategorie($c4);
        $manager ->persist($sc5);

        $c5 = new Categorie();
        $c5 ->setNom("Cordes");
        $manager ->persist($c5);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Violons");
        $sc1 ->setImage("/img/violons.png");
        $sc1 ->setCategorie($c5);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Altos");
        $sc2 ->setImage("/img/altos.png");
        $sc2 ->setCategorie($c5);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Violoncelles");
        $sc3 ->setImage("/img/violoncelles.png");
        $sc3 ->setCategorie($c5);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Contrebasses");
        $sc4 ->setImage("/img/contrebasses.png");
        $sc4 ->setCategorie($c5);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Accessoires cordes");
        $sc5 ->setImage("/img/accessoires_cordes.png");
        $sc5 ->setCategorie($c5);
        $manager ->persist($sc5);

        $c6 = new Categorie();
        $c6 ->setNom("Instruments traditionnels");
        $manager ->persist($c6);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Accordéons");
        $sc1 ->setImage("/img/accordéons.png");
        $sc1 ->setCategorie($c6);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Harmonicas");
        $sc2 ->setImage("/img/harmonicas.png");
        $sc2 ->setCategorie($c6);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Mandolines");
        $sc3 ->setImage("/img/mandolines.png");
        $sc3 ->setCategorie($c6);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Balalaïkas");
        $sc4 ->setImage("/img/balalaikas.png");
        $sc4 ->setCategorie($c6);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Instruments celtiques");
        $sc5 ->setImage("/img/instruments_celtiques.png");
        $sc5 ->setCategorie($c6);
        $manager ->persist($sc5);

        $c7 = new Categorie();
        $c7 ->setNom("Sonorisation");
        $manager ->persist($c7);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Micros");
        $sc1 ->setImage("/img/micros.png");
        $sc1 ->setCategorie($c7);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Interfaces audio");
        $sc2 ->setImage("/img/interfaces_audio.png");
        $sc2 ->setCategorie($c7);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Mixeurs");
        $sc3 ->setImage("/img/mixeurs.png");
        $sc3 ->setCategorie($c7);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Casques");
        $sc4 ->setImage("/img/casques.png");
        $sc4 ->setCategorie($c7);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Enceintes");
        $sc5 ->setImage("/img/enceintes.png");
        $sc5 ->setCategorie($c7);
        $manager ->persist($sc5);

        $c8 = new Categorie();
        $c8 ->setNom("Dj & Production");
        $manager ->persist($c8);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Platines");
        $sc1 ->setImage("/img/platines.png");
        $sc1 ->setCategorie($c8);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Contrôleurs DJ");
        $sc2 ->setImage("/img/controleurs.png");
        $sc2 ->setCategorie($c8);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Logiciel");
        $sc3 ->setImage("/img/logiciel.png");
        $sc3 ->setCategorie($c8);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Eclairage");
        $sc4 ->setImage("/img/eclairage.png");
        $sc4 ->setCategorie($c8);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Accessoire");
        $sc5 ->setImage("/img/accessoire.png");
        $sc5 ->setCategorie($c8);
        $manager ->persist($sc5);

        $c9 = new Categorie();
        $c9 ->setNom("Partitions & livres");
        $manager ->persist($c9);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Méthodes guitare");
        $sc1 ->setImage("/img/methodeguitare.png");
        $sc1 ->setCategorie($c9);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Méthodes piano");
        $sc2 ->setImage("/img/methodepiano.png");
        $sc2 ->setCategorie($c9);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Méthodes batterie");
        $sc3 ->setImage("/img/methodebatterie.png");
        $sc3 ->setCategorie($c9);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Théorie musicale");
        $sc4 ->setImage("/img/theoriemusicale.png");
        $sc4 ->setCategorie($c9);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Recueils de partitions");
        $sc5 ->setImage("/img/recueils_partitions.png");
        $sc5 ->setCategorie($c9);
        $manager ->persist($sc5);

        $c10 = new Categorie();
        $c10 ->setNom("Accessoires");
        $manager ->persist($c10);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Cordes guitare");
        $sc1 ->setImage("/img/cordes_guitare.png");
        $sc1 ->setCategorie($c10);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Mediators");
        $sc2 ->setImage("/img/mediator.png");
        $sc2 ->setCategorie($c10);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Housses & étuis");
        $sc3 ->setImage("/img/housses.png");
        $sc3 ->setCategorie($c10);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Pupitres");
        $sc4 ->setImage("/img/pupitres.png");
        $sc4 ->setCategorie($c10);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Accordeurs");
        $sc5 ->setImage("/img/accordeurs.png");
        $sc5 ->setCategorie($c10);
        $manager ->persist($sc5);

        $manager->flush();
    }
}
