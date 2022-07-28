<?php

namespace App\Entity;

use App\Entity\Person;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\OwnerRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity(repositoryClass: OwnerRepository::class)]
class Owner
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #@UniqueEntity(fields={"person", "animal"})
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'owners')]
    private ?Animal $animal = null;

    #[ORM\ManyToOne(inversedBy: 'owners')]
    private ?Person $Person = null;

    #[ORM\Column]
    private ?int $nb = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    public function getPerson(): ?Person
    {
        return $this->Person;
    }

    public function setPerson(?Person $Person): self
    {
        $this->Person = $Person;

        return $this;
    }

    public function getNb(): ?int
    {
        return $this->nb;
    }

    public function setNb(int $nb): self
    {
        $this->nb = $nb;

        return $this;
    }
}
