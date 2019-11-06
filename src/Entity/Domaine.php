<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DomaineRepository")
 */
class Domaine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_domaine;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Stats", mappedBy="domaine", cascade={"persist", "remove"})
     */
    private $domaine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDomaine(): ?string
    {
        return $this->nom_domaine;
    }

    public function setNomDomaine(string $nom_domaine): self
    {
        $this->nom_domaine = $nom_domaine;

        return $this;
    }

    public function getDomaine(): ?Stats
    {
        return $this->domaine;
    }

    public function setDomaine(?Stats $domaine): self
    {
        $this->domaine = $domaine;

        // set (or unset) the owning side of the relation if necessary
        $newDomaine = null === $domaine ? null : $this;
        if ($domaine->getDomaine() !== $newDomaine) {
            $domaine->setDomaine($newDomaine);
        }

        return $this;
    }
}
