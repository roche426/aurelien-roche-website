<?php

namespace App\Infrastructure\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="presentation")
 * */
class Presentation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=24)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $teaser;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     */
    private $formation;

    /**
     * @ORM\Column(type="string")
     */
    private $company;

    /**
     * @ORM\Column(type="string")
     */
    private $mobility;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $languages;

    /**
     * @ORM\Column(type="string")
     */
    private $hobbies;

    /**
     * @ORM\Column(type="json")
     */
    private $qualities;


    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTeaser(): ?string
    {
        return $this->teaser;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFormation(): string
    {
        return $this->formation;
    }

    public function getCompany(): string
    {
        return $this->company;
    }


    public function getMobility(): string
    {
        return $this->mobility;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getLanguages(): string
    {
        return $this->languages;
    }

    public function getHobbies(): string
    {
        return $this->hobbies;
    }

    public function getQualities(): array
    {
        return $this->qualities;
    }
}