<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
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

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Guitares acoustiques");
        $sc2 ->setImage("/img/guitaresacoustiques.png");
        $sc2 ->setCategorie($c1);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Guitares classiques");
        $sc3 ->setImage("/img/guitaresclassiques.png");
        $sc3 ->setCategorie($c1);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("basses");
        $sc4 ->setImage("/img/basses.png");
        $sc4 ->setCategorie($c1);
        $manager ->persist($sc4);

        $sc5 = new SousCategorie();
        $sc5 ->setNom("Ukulélés");
        $sc5 ->setImage("/img/ukulélés.png");
        $sc5 ->setCategorie($c1);
        $manager ->persist($sc5);

        $c2 = new Categorie();
        $c2 ->setNom("Percussions");
        $manager ->persist($c2);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Batteries acoustiques");
        $sc1 ->setImage("/img/batteries_acoustiques.png");
        $sc1 ->setCategorie($c2);
        $manager ->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Batteries électroniques");
        $sc2 ->setImage("/img/batteries_électroniques.png");
        $sc2 ->setCategorie($c2);
        $manager ->persist($sc2);

        $sc3 = new SousCategorie();
        $sc3 ->setNom("Percussions africaines");
        $sc3 ->setImage("/img/percussions_africaines.png");
        $sc3 ->setCategorie($c2);
        $manager ->persist($sc3);

        $sc4 = new SousCategorie();
        $sc4 ->setNom("Percussions latines");
        $sc4 ->setImage("/img/percussions_latines.png");
        $sc4 ->setCategorie($c2);
        $manager ->persist($sc4);

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
