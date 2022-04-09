<?php

namespace App\Entity;

use App\Repository\EpisodeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EpisodeRepository::class)]
class Episode implements \JsonSerializable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $episodeNr;

    #[ORM\Column(type: 'string', length: 100)]
    private $title;

    #[ORM\Column(type: 'string', length: 255)]
    private $episodeUrl;

    #[ORM\Column(type: 'string', length: 255)]
    private $thumbnailUrl;

    #[ORM\OneToMany(mappedBy: 'episode', targetEntity: Car::class, orphanRemoval: true)]
    private $car;

    public function jsonSerialize()
    {
        return [
            'episodeNr' => $this->episodeNr,
            'title' => $this->title,
            'episodeUrl' => $this->episodeUrl,
            'thumbnailUrl' => $this->thumbnailUrl,
            'cars' => $this->car->getValues()
        ];
    }

    public function __construct()
    {
        $this->car = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEpisodeNr(): ?int
    {
        return $this->episodeNr;
    }

    public function __toString()
    {
        return $this->episodeNr;
    }

    public function setEpisodeNr(int $episodeNr): self
    {
        $this->episodeNr = $episodeNr;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getEpisodeUrl(): ?string
    {
        return $this->episodeUrl;
    }

    public function setEpisodeUrl(string $episodeUrl): self
    {
        $this->episodeUrl = $episodeUrl;

        return $this;
    }

    public function getThumbnailUrl(): ?string
    {
        return $this->thumbnailUrl;
    }

    public function setThumbnailUrl(string $thumbnailUrl): self
    {
        $this->thumbnailUrl = $thumbnailUrl;

        return $this;
    }

    /**
     * @return Collection<int, Car>
     */
    public function getCar(): Collection
    {
        return $this->car;
    }

    public function addCar(Car $car): self
    {
        if (!$this->car->contains($car)) {
            $this->car[] = $car;
            $car->setEpisodeNr($this);
        }

        return $this;
    }

    public function removeCar(Car $car): self
    {
        if ($this->car->removeElement($car)) {
            // set the owning side to null (unless already changed)
            if ($car->getEpisodeNr() === $this) {
                $car->setEpisodeNr(null);
            }
        }

        return $this;
    }
}
