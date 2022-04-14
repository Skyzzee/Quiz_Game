<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{

/* ------------------------------------------------------------- COMPOSANT ------------------------------------------------------------------ */

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 50)]
    private $name;

/* --------------------------------------------------------------- RELATION ----------------------------------------------------------------- */

    #[ORM\OneToMany(mappedBy: 'category', targetEntity: Exercise::class)]
    private $exercises;

/* ------------------------------------------------------------ CONSCTRUCTEUR --------------------------------------------------------------- */

    public function __construct()
    {
        $this->exercises = new ArrayCollection();
    }

/* ---------------------------------------------------------------- GETTER ------------------------------------------------------------------ */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

/* ---------------------------------------------------------------- SETTER ------------------------------------------------------------------ */

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

/* ---------------------------------------------------------- RELATION (EXERCISE) ----------------------------------------------------------- */

    /**
     * @return Collection<int, Exercise>
     */
    public function getExercises(): Collection
    {
        return $this->exercises;
    }

    public function addExercise(Exercise $exercise): self
    {
        if (!$this->exercises->contains($exercise)) {
            $this->exercises[] = $exercise;
            $exercise->setCategory($this);
        }

        return $this;
    }

    public function removeExercise(Exercise $exercise): self
    {
        if ($this->exercises->removeElement($exercise)) {
            // set the owning side to null (unless already changed)
            if ($exercise->getCategory() === $this) {
                $exercise->setCategory(null);
            }
        }

        return $this;
    }

}
