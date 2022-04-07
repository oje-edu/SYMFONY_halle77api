<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\PlateRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: PlateRepository::class)]
class Plate implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 25)]
    #[Assert\NotBlank]
    private string $kz;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    private string $name;

    #[ORM\Column(type: 'decimal', precision: 16, scale: 14)]
    #[Assert\NotBlank]
    private $lat;

    #[ORM\Column(type: 'decimal', precision: 16, scale: 14)]
    #[Assert\NotBlank]
    private $lng;

    public function jsonSerialize()
    {
        return [
            'kz' => $this->kz,
            'name' => $this->name,
            'lat' => $this->lat,
            'lng' => $this->lng,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getKz(): string
    {
        return $this->kz;
    }

    public function setKz(string $kz): self
    {
        $this->kz = $kz;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getLat()
    {
        return $this->lat;
    }

    public function setLat($lat): self
    {
        $this->lat = $lat;
        return $this;
    }

    public function getLng()
    {
        return $this->lng;
    }

    public function setLng($lng): self
    {
        $this->lng = $lng;
        return $this;
    }



}