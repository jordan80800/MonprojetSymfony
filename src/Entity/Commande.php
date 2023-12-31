<?php

namespace App\Entity;

use App\Repository\CommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommandeRepository::class)]
class Commande
{
    const ETAT_ENREGISTREE_PAYEE = 0;
    const ETAT_EN_PREPARATION = 1;
    const ETAT_EN_COURS_LIVRAISON = 2;
    const ETAT_LIVREE = 3;


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_commande = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
    private ?string $total = null;

    #[ORM\Column]
    private ?int $etat = null;

    #[ORM\OneToMany(mappedBy: 'commande', targetEntity: Detail::class)]
    private Collection $details;

    #[ORM\ManyToOne(inversedBy: 'commandes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(length: 255)]
    private ?string $AdresseDeFacturation = null;

    #[ORM\Column(length: 255)]
    private ?string $MoyenDePayement = null;

    #[ORM\Column(length: 255)]
    private ?string $AdresseDeLivraison = null;

    public function __construct()
    {
        $this->details = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->date_commande;
    }

    public function setDateCommande(\DateTimeInterface $date_commande): static
    {
        $this->date_commande = $date_commande;

        return $this;
    }

    public function getTotal(): ?string
    {
        return $this->total;
    }

    public function setTotal(?string $total): static
    {
        $this->total = $total;

        return $this;
    }

    public function getEtat(): ?int
    {
        return $this->etat;
    }

    public function setEtat(int $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * @return Collection<int, Detail>
     */
    public function getDetails(): Collection
    {
        return $this->details;
    }

    public function addDetail(Detail $detail): static
    {
        if (!$this->details->contains($detail)) {
            $this->details->add($detail);
            $detail->setCommande($this);
        }

        return $this;
    }

    public function removeDetail(Detail $detail): static
    {
        if ($this->details->removeElement($detail)) {
            // set the owning side to null (unless already changed)
            if ($detail->getCommande() === $this) {
                $detail->setCommande(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getAdresseDeFacturation(): ?string
    {
        return $this->AdresseDeFacturation;
    }

    public function setAdresseDeFacturation(?string $AdresseDeFacturation): static
    {
        $this->AdresseDeFacturation = $AdresseDeFacturation;

        return $this;
    }

    public function getMoyenDePayement(): ?string
    {
        return $this->MoyenDePayement;
    }

    public function setMoyenDePayement(?string $MoyenDePayement): static
    {
        $this->MoyenDePayement = $MoyenDePayement;

        return $this;
    }

    public function getAdresseDeLivraison(): ?string
    {
        return $this->AdresseDeLivraison;
    }

    public function setAdresseDeLivraison(?string $AdresseDeLivraison): static
    {
        $this->AdresseDeLivraison = $AdresseDeLivraison;

        return $this;
    }
}
