<?php

namespace App\Entity;

use App\Repository\ProfileRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfileRepository::class)]
class Profile
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $program = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $certificate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $alluniversities = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $robuniversities = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vruniversities = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $aruniversities = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProgram(): ?string
    {
        return $this->program;
    }

    public function setProgram(?string $program): static
    {
        $this->program = $program;

        return $this;
    }

    public function getCertificate(): ?string
    {
        return $this->certificate;
    }

    public function setCertificate(?string $certificate): static
    {
        $this->certificate = $certificate;

        return $this;
    }

    public function getAlluniversities(): ?string
    {
        return $this->alluniversities;
    }

    public function setAlluniversities(?string $alluniversities): static
    {
        $this->alluniversities = $alluniversities;

        return $this;
    }

    public function getRobuniversities(): ?string
    {
        return $this->robuniversities;
    }

    public function setRobuniversities(?string $robuniversities): static
    {
        $this->robuniversities = $robuniversities;

        return $this;
    }

    public function getVruniversities(): ?string
    {
        return $this->vruniversities;
    }

    public function setVruniversities(?string $vruniversities): static
    {
        $this->vruniversities = $vruniversities;

        return $this;
    }

    public function getAruniversities(): ?string
    {
        return $this->aruniversities;
    }

    public function setAruniversities(?string $aruniversities): static
    {
        $this->aruniversities = $aruniversities;

        return $this;
    }
}
