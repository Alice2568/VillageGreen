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
        $c1 ->setNom("Guitares");
        $c1 ->setImage("imageguitares.png");
        $manager->persist($c1);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Guitares Electriques");
        $sc1 ->setImage("imgguitareelectrik.jpg");
        // $sc1 ->setCategorie($c1);
        $c1 ->addSousCategory($sc1);
        $manager->persist($sc1);

        $p1 = new Produit();
        $p1 ->setNom("Guitares Electriques hk-z70");
        $p1 ->setImage("imgguitareelectrikhkz70.jpg");
        $p1 ->setDescription("...");
        $p1->setPrix(125.99);
        $p1->setSousCategorie($sc1);
        $manager->persist($p1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("Guitares accoustiques");
        $sc2 ->setImage("imgguitareaccoustique.jpg");
        // $sc2 ->setCategorie($c1);
        $c1 ->addSousCategory($sc2);
        $manager->persist($sc2);


        $c2 = new Categorie();
        $c2 ->setNom("Claviers");
        $c2 ->setImage("imageclaviers.png");
        $manager->persist($c2);

        $sc1 = new SousCategorie();
        $sc1 ->setNom("Claviers arrangeurs");
        $sc1 ->setImage("imgcclavierarrangeurs.jpg");
        // $sc1 ->setCategorie($c2);
        $c2 ->addSousCategory($sc1);
        $manager->persist($sc1);

        $sc2 = new SousCategorie();
        $sc2 ->setNom("claviers maitres");
        $sc2 ->setImage("imgclaviersmaitres.jpg");
        // $sc2 ->setCategorie($c2);
        $c2 ->addSousCategory($sc2);
        $manager->persist($sc2);
        
        $sc3 = new SousCategorie();
        $sc3 ->setNom("pianos numériques");
        $sc3 ->setImage("imgpianonumeriques.jpg");
        // $sc3 ->setCategorie($c2);
        $c2 ->addSousCategory($sc3);
        $manager->persist($sc3);

        $manager->flush();
    }
}
