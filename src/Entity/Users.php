<?php

namespace App\Entity;


use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;


#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column(length: 15)]
    private ?string $pseudonyme = null;

    #[ORM\Column(nullable: true)]
    private ?int $numero = null;

    #[ORM\ManyToMany(targetEntity: Ateliers::class, mappedBy: 'abonnes')]
    private Collection $abonnements_ateliers;

    #[ORM\ManyToMany(targetEntity: Comissions::class, mappedBy: 'authorisations')]
    private Collection $authorisations_commissions;

    #[ORM\Column(length: 20)]
    private ?string $password = null;
    private PasswordHasherFactoryInterface $passwordHasherFactory;


    public function __construct()
    {
        
        $this->abonnements_ateliers = new ArrayCollection();
        $this->authorisations_commissions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPseudonyme(): ?string
    {
        return $this->pseudonyme;
    }

    public function setPseudonyme(string $pseudonyme): static
    {
        $this->pseudonyme = $pseudonyme;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * @return Collection<int, Ateliers>
     */
    public function getAbonnementsAteliers(): Collection
    {
        return $this->abonnements_ateliers;
    }

    public function addAbonnementsAtelier(Ateliers $abonnementsAtelier): static
    {
        if (!$this->abonnements_ateliers->contains($abonnementsAtelier)) {
            $this->abonnements_ateliers->add($abonnementsAtelier);
            $abonnementsAtelier->addAbonne($this);
        }

        return $this;
    }

    public function removeAbonnementsAtelier(Ateliers $abonnementsAtelier): static
    {
        if ($this->abonnements_ateliers->removeElement($abonnementsAtelier)) {
            $abonnementsAtelier->removeAbonne($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Comissions>
     */
    public function getAuthorisationsCommissions(): Collection
    {
        return $this->authorisations_commissions;
    }

    public function addAuthorisationsCommission(Comissions $authorisationsCommission): static
    {
        if (!$this->authorisations_commissions->contains($authorisationsCommission)) {
            $this->authorisations_commissions->add($authorisationsCommission);
            $authorisationsCommission->addAuthorisation($this);
        }

        return $this;
    }

    public function removeAuthorisationsCommission(Comissions $authorisationsCommission): static
    {
        if ($this->authorisations_commissions->removeElement($authorisationsCommission)) {
            $authorisationsCommission->removeAuthorisation($this);
        }

        return $this;
    }

    public function setPassword(string $password): static
    {
       
        $this->password ;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }
}
