<?php

namespace App\Entity;

use App\Repository\ComissionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComissionsRepository::class)]
class Comissions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 25)]
    private ?string $nom_commissions = null;

    #[ORM\ManyToMany(targetEntity: Users::class, inversedBy: 'authorisations_commissions')]
    private Collection $authorisations;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $point_du_jour = null;

    public function __construct()
    {
        $this->authorisations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCommissions(): ?string
    {
        return $this->nom_commissions;
    }

    public function setNomCommissions(string $nom_commissions): static
    {
        $this->nom_commissions = $nom_commissions;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getAuthorisations(): Collection
    {
        return $this->authorisations;
    }

    public function addAuthorisation(Users $authorisation): static
    {
        if (!$this->authorisations->contains($authorisation)) {
            $this->authorisations->add($authorisation);
        }

        return $this;
    }

    public function removeAuthorisation(Users $authorisation): static
    {
        $this->authorisations->removeElement($authorisation);

        return $this;
    }

    public function getPointDuJour(): ?string
    {
        return $this->point_du_jour;
    }

    public function setPointDuJour(?string $point_du_jour): static
    {
        $this->point_du_jour = $point_du_jour;

        return $this;
    }
}
