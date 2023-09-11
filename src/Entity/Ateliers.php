<?php

namespace App\Entity;

use App\Repository\AteliersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AteliersRepository::class)]
class Ateliers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $nom_atelier = null;

    #[ORM\ManyToMany(targetEntity: Users::class, inversedBy: 'abonnements_ateliers')]
    private Collection $abonnes;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $point_information = null;

    public function __construct()
    {
        $this->abonnes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAtelier(): ?string
    {
        return $this->nom_atelier;
    }

    public function setNomAtelier(string $nom_atelier): static
    {
        $this->nom_atelier = $nom_atelier;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getAbonnes(): Collection
    {
        return $this->abonnes;
    }

    public function addAbonne(Users $abonne): static
    {
        if (!$this->abonnes->contains($abonne)) {
            $this->abonnes->add($abonne);
        }

        return $this;
    }

    public function removeAbonne(Users $abonne): static
    {
        $this->abonnes->removeElement($abonne);

        return $this;
    }

    public function getPointInformation(): ?string
    {
        return $this->point_information;
    }

    public function setPointInformation(?string $point_information): static
    {
        $this->point_information = $point_information;

        return $this;
    }
}
