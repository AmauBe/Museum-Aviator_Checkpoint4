<?php

namespace App\Entity;

use App\Repository\InformationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InformationRepository::class)]
class Information
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $lentgh = null;

    #[ORM\Column(length: 255)]
    private ?string $height = null;

    #[ORM\Column(length: 255)]
    private ?string $MaxSpeed = null;

    #[ORM\Column]
    private ?int $PassengerCapacity = null;

    #[ORM\Column(length: 255)]
    private ?string $distanceCapacity = null;

    #[ORM\Column(length: 255)]
    private ?string $fuelCapacity = null;

    #[ORM\Column(length: 700)]
    private ?string $cockpitImage = null;

    #[ORM\Column(length: 700)]
    private ?string $homeImage = null;

    #[ORM\ManyToOne(inversedBy: 'information')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Plane $plane = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLentgh(): ?string
    {
        return $this->lentgh;
    }

    public function setLentgh(string $lentgh): self
    {
        $this->lentgh = $lentgh;

        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setHeight(string $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getMaxSpeed(): ?string
    {
        return $this->MaxSpeed;
    }

    public function setMaxSpeed(string $MaxSpeed): self
    {
        $this->MaxSpeed = $MaxSpeed;

        return $this;
    }

    public function getPassengerCapacity(): ?int
    {
        return $this->PassengerCapacity;
    }

    public function setPassengerCapacity(int $PassengerCapacity): self
    {
        $this->PassengerCapacity = $PassengerCapacity;

        return $this;
    }

    public function getDistanceCapacity(): ?string
    {
        return $this->distanceCapacity;
    }

    public function setDistanceCapacity(string $distanceCapacity): self
    {
        $this->distanceCapacity = $distanceCapacity;

        return $this;
    }

    public function getFuelCapacity(): ?string
    {
        return $this->fuelCapacity;
    }

    public function setFuelCapacity(string $fuelCapacity): self
    {
        $this->fuelCapacity = $fuelCapacity;

        return $this;
    }

    public function getCockpitImage(): ?string
    {
        return $this->cockpitImage;
    }

    public function setCockpitImage(string $cockpitImage): self
    {
        $this->cockpitImage = $cockpitImage;

        return $this;
    }

    public function getHomeImage(): ?string
    {
        return $this->homeImage;
    }

    public function setHomeImage(string $homeImage): self
    {
        $this->homeImage = $homeImage;

        return $this;
    }

    public function getPlane(): ?Plane
    {
        return $this->plane;
    }

    public function setPlane(?Plane $plane): self
    {
        $this->plane = $plane;

        return $this;
    }
}
