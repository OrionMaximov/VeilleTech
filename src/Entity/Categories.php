<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoriesRepository::class)
 */
class Categories
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reseau;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $server;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Api;

    /**
     * @ORM\ManyToOne(targetEntity=Site::class, inversedBy="categories")
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getReseau(): ?string
    {
        return $this->reseau;
    }

    public function setReseau(?string $reseau): self
    {
        $this->reseau = $reseau;

        return $this;
    }

    public function getServer(): ?string
    {
        return $this->server;
    }

    public function setServer(?string $server): self
    {
        $this->server = $server;

        return $this;
    }

    public function getApi(): ?string
    {
        return $this->Api;
    }

    public function setApi(?string $Api): self
    {
        $this->Api = $Api;

        return $this;
    }

    public function getType(): ?Site
    {
        return $this->type;
    }

    public function setType(?Site $type): self
    {
        $this->type = $type;

        return $this;
    }
}
