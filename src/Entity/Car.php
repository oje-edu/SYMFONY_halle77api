<?php

namespace App\Entity;

use App\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $carNr;

    #[ORM\Column(type: 'string', length: 50)]
    private $brand;

    #[ORM\Column(type: 'string', length: 60, nullable: true)]
    private $type;

    #[ORM\Column(type: 'decimal', precision: 3, scale: 1, nullable: true)]
    private $ccm;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $hp;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $km;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $year;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 1, nullable: true)]
    private $ps1;

    #[ORM\Column(type: 'decimal', precision: 5, scale: 1, nullable: true)]
    private $ps2;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $comment;

    #[ORM\ManyToOne(targetEntity: Episode::class, inversedBy: 'car')]
    #[ORM\JoinColumn(nullable: false)]
    private $episode;

    public function jsonSerialize()
    {
        return [
            'episodeNr' => $this->episode->getEpisodeNr(),
            'carNr' => $this->carNr,
            'brand' => $this->brand,
            'type' => $this->type,
            'ccm' => $this->ccm,
            'hp' => $this->hp,
            'km' => $this->km,
            'year' => $this->year,
            'ps1' => $this->ps1,
            'ps2' => $this->ps2,
            'comment' => $this->comment,

        ];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarNr(): ?int
    {
        return $this->carNr;
    }

    public function setCarNr(int $carNr): self
    {
        $this->carNr = $carNr;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getCcm(): ?string
    {
        return $this->ccm;
    }

    public function setCcm(string $ccm): self
    {
        $this->ccm = $ccm;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(?int $hp): self
    {
        $this->hp = $hp;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(?int $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getPs1(): ?string
    {
        return $this->ps1;
    }

    public function setPs1(?string $ps1): self
    {
        $this->ps1 = $ps1;

        return $this;
    }

    public function getPs2(): ?string
    {
        return $this->ps2;
    }

    public function setPs2(?string $ps2): self
    {
        $this->ps2 = $ps2;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getEpisodeNr(): ?Episode
    {
        return $this->episode;
    }

    public function setEpisodeNr(?Episode $episode): self
    {
        $this->episode = $episode;

        return $this;
    }
}
