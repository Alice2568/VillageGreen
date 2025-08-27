<?php

namespace App\Service;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Panier 
{
   
    
    private $session;
    private $repo;
    public function __construct(ProduitRepository $repo, RequestStack $requestStack){
        $this->session = $requestStack->getSession();
        $this->repo= $repo;
    }
    public function add($id) {
       
        $panier = $this->session->get('panier', []);
        $produit = $this->repo ->find($id);

        if(isset($panier[$id]))
            $panier[$id]++;
        else
        $panier[$id] = 1;

        $this->session->set('panier' , $panier);

    }
    public function delete($id) {

    
        $panier = $this->session ->get('panier', []);

        if(isset($panier[$id]))
            $panier[$id]--;
            if  ($panier[$id] == 0){
                unset($panier[$id]);
            }
        

        $this->session->set('panier' , $panier);
        }

    public function liste() {

            $panier =$this->session->get('panier', []);
            return $panier;
        }
}