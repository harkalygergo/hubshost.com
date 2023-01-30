<?php

namespace App\Entity;

use App\Repository\WatchRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WatchRepository::class)]
class Watch
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Brand = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Model = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $SKU = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $OtherSKUs = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $StrapWidth = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $LugToLug = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $OfficialURL = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    public function setBrand(string $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->Model;
    }

    public function setModel(?string $Model): self
    {
        $this->Model = $Model;

        return $this;
    }

    public function getSKU(): ?string
    {
        return $this->SKU;
    }

    public function setSKU(?string $SKU): self
    {
        $this->SKU = $SKU;

        return $this;
    }

    public function getOtherSKUs(): ?string
    {
        return $this->OtherSKUs;
    }

    public function setOtherSKUs(?string $OtherSKUs): self
    {
        $this->OtherSKUs = $OtherSKUs;

        return $this;
    }

    public function getStrapWidth(): ?int
    {
        return $this->StrapWidth;
    }

    public function setStrapWidth(?int $StrapWidth): self
    {
        $this->StrapWidth = $StrapWidth;

        return $this;
    }

    public function getLugToLug(): ?int
    {
        return $this->LugToLug;
    }

    public function setLugToLug(?int $LugToLug): self
    {
        $this->LugToLug = $LugToLug;

        return $this;
    }

    public function getOfficialURL(): ?string
    {
        return $this->OfficialURL;
    }

    public function setOfficialURL(?string $OfficialURL): self
    {
        $this->OfficialURL = $OfficialURL;

        return $this;
    }
}
