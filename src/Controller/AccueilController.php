<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function accueil(CategorieRepository $repository): Response
    {
        $categories = $repository->findAll();

        foreach ($categories as $categorie) {
            $souscats = $categorie->getSousCategories()->toArray();
            if (!empty($souscats)) {
                $randomSouscat = $souscats[array_rand($souscats)];
                // On stocke l'image choisie dans une propriété temporaire
                $categorie->randomImage = $randomSouscat->getImage();
            } else {
                // fallback si pas de sous-catégorie
                $categorie->randomImage = $categorie->getImage();
            }
        }


        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
            'categories' => $categories
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('accueil/contact.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
   
}
