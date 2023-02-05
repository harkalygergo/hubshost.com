<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Name = null;

    #[ORM\Column(nullable: true)]
    private ?int $ZIP = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $City = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Address = null;

    #[ORM\Column(length: 32, nullable: true)]
    private ?string $VatNumber = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $EuVatNumber = null;

    #[ORM\Column(nullable: true)]
    private ?int $Phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Email = null;

    #[ORM\Column(length: 128, nullable: true)]
    private ?string $Website = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Profession = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Owner = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(?string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getZIP(): ?int
    {
        return $this->ZIP;
    }

    public function setZIP(?int $ZIP): self
    {
        $this->ZIP = $ZIP;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(?string $City): self
    {
        $this->City = $City;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(?string $Address): self
    {
        $this->Address = $Address;

        return $this;
    }

    public function getVatNumber(): ?string
    {
        return $this->VatNumber;
    }

    public function setVatNumber(?string $VatNumber): self
    {
        $this->VatNumber = $VatNumber;

        return $this;
    }

    public function getEuVatNumber(): ?string
    {
        return $this->EuVatNumber;
    }

    public function setEuVatNumber(?string $EuVatNumber): self
    {
        $this->EuVatNumber = $EuVatNumber;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->Phone;
    }

    public function setPhone(?int $Phone): self
    {
        $this->Phone = $Phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(?string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->Website;
    }

    public function setWebsite(?string $Website): self
    {
        $this->Website = $Website;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->Profession;
    }

    public function setProfession(?string $Profession): self
    {
        $this->Profession = $Profession;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getOwner(): ?string
    {
        return $this->Owner;
    }

    public function setOwner(?string $Owner): self
    {
        $this->Owner = $Owner;

        return $this;
    }
}
