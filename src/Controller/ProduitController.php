<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Produit;
use App\Entity\SousCategorie;
use App\Repository\ProduitRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/categorie/{categorie}', name: 'app_categorie')]
    public function categorie(Categorie $categorie): Response
    {

    
        return $this->render('produit/categorie.html.twig', [
           'categorie' => $categorie,
            
        ]);
    }
    #[Route('/produits/{id}', name: 'app_produits')]
    public function produits(SousCategorie $sousCategorie): Response
    {
        
        return $this->render('produit/produits.html.twig', [
           'sousCategorie' => $sousCategorie,
            
        ]);
    }
    #[Route('/produit/{produit}', name: 'app_produit')]
    public function produit(Produit $produit): Response
    {
        
        return $this->render('produit/produit.html.twig', [
            'controller_name' => 'ProduitController',
           
           'produit' => $produit,
            
        ]);
    }
}
