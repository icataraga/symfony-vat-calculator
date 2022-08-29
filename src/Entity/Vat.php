<?php

namespace App\Entity;

use App\Repository\VatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VatRepository::class)
 */
class Vat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $currency;

    /**
     * @ORM\Column(type="float")
     */
    private $cost;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $vat_rate_percentage;

    /**
     * @ORM\Column(type="float")
     */
    private $vat_rate_amount;

    /**
     * @ORM\Column(type="float")
     */
    private $gross_amount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(float $cost): self
    {
        $this->cost = $cost;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getVatRatePercentage(): ?float
    {
        return $this->vat_rate_percentage;
    }

    public function setVatRatePercentage(float $vat_rate_percentage): self
    {
        $this->vat_rate_percentage = $vat_rate_percentage;

        return $this;
    }

    public function getVatRateAmount(): ?float
    {
        return $this->vat_rate_amount;
    }

    public function setVatRateAmount(float $vat_rate_amount): self
    {
        $this->vat_rate_amount = $vat_rate_amount;

        return $this;
    }

    public function getGrossAmount(): ?float
    {
        return $this->gross_amount;
    }

    public function setGrossAmount(float $gross_amount): self
    {
        $this->gross_amount = $gross_amount;

        return $this;
    }
}
