<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\MaterialRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaterialRepository::class)]
class Material
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 300, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 300, nullable: true)]
    private ?string $shorttext = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $icon = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $firstpart = null;

    #[ORM\Column(length: 2000, nullable: true)]
    private ?string $secondpart = null;

    #[ORM\Column(length: 3000, nullable: true)]
    private ?string $thirdpart = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $firstimg = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $secondimg = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $firstimgsign = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $secondimgsign = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $firstlink = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $secondlink = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $pdf = null;

    #[ORM\Column(length: 150, nullable: true)]
    private ?string $ptx = null;

    #[ORM\Column(length: 500, nullable: true)]
    private ?string $video = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heading = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getShorttext(): ?string
    {
        return $this->shorttext;
    }

    public function setShorttext(?string $shorttext): static
    {
        $this->shorttext = $shorttext;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    public function getFirstpart(): ?string
    {
        return $this->firstpart;
    }

    public function setFirstpart(?string $firstpart): static
    {
        $this->firstpart = $firstpart;

        return $this;
    }

    public function getSecondpart(): ?string
    {
        return $this->secondpart;
    }

    public function setSecondpart(?string $secondpart): static
    {
        $this->secondpart = $secondpart;

        return $this;
    }

    public function getThirdpart(): ?string
    {
        return $this->thirdpart;
    }

    public function setThirdpart(?string $thirdpart): static
    {
        $this->thirdpart = $thirdpart;

        return $this;
    }

    public function getFirstimg(): ?string
    {
        return $this->firstimg;
    }

    public function setFirstimg(?string $firstimg): static
    {
        $this->firstimg = $firstimg;

        return $this;
    }

    public function getSecondimg(): ?string
    {
        return $this->secondimg;
    }

    public function setSecondimg(?string $secondimg): static
    {
        $this->secondimg = $secondimg;

        return $this;
    }

    public function getFirstimgsign(): ?string
    {
        return $this->firstimgsign;
    }

    public function setFirstimgsign(?string $firstimgsign): static
    {
        $this->firstimgsign = $firstimgsign;

        return $this;
    }

    public function getSecondimgsign(): ?string
    {
        return $this->secondimgsign;
    }

    public function setSecondimgsign(?string $secondimgsign): static
    {
        $this->secondimgsign = $secondimgsign;

        return $this;
    }

    public function getFirstlink(): ?string
    {
        return $this->firstlink;
    }

    public function setFirstlink(?string $firstlink): static
    {
        $this->firstlink = $firstlink;

        return $this;
    }

    public function getSecondlink(): ?string
    {
        return $this->secondlink;
    }

    public function setSecondlink(?string $secondlink): static
    {
        $this->secondlink = $secondlink;

        return $this;
    }

    public function getPdf(): ?string
    {
        return $this->pdf;
    }

    public function setPdf(?string $pdf): static
    {
        $this->pdf = $pdf;

        return $this;
    }

    public function getPtx(): ?string
    {
        return $this->ptx;
    }

    public function setPtx(?string $ptx): static
    {
        $this->ptx = $ptx;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): static
    {
        $this->video = $video;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function setHeading(string $heading): static
    {
        $this->heading = $heading;

        return $this;
    }
}
