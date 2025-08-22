<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $ref_fournisseur = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix_achat = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\Column]
    private ?bool $actif = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SousCategorie $souscategorie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getRefFournisseur(): ?string
    {
        return $this->ref_fournisseur;
    }

    public function setRefFournisseur(string $ref_fournisseur): static
    {
        $this->ref_fournisseur = $ref_fournisseur;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(string $prix_achat): static
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function isActif(): ?bool
    {
        return $this->actif;
    }

    public function setActif(bool $actif): static
    {
        $this->actif = $actif;

        return $this;
    }

    public function getSoussouscategorie(): ?SousCategorie
    {
        return $this->souscategorie;
    }

    public function setSoussouscategorie(?SousCategorie $souscategorie): static
    {
        $this->souscategorie = $souscategorie;

        return $this;
    }
}
