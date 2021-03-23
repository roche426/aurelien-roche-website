<?php

namespace App\Application\Entite;

class Presentation
{
    /** @var string */
    private $description;

    /** @var string */
    private $job;

    /** @var string */
    private $mobilite;

    /** @var string */
    private $poste;

    /** @var array */
    private $wordsDescriptif;

    /** @var array */
    private $hobbies;

    /** @var ?string */
    private $image;

    /** @var string */
    private $email;

    /** @var array */
    private $langues;

    public function __construct
    (
        string $description,
        string $job,
        string $mobilite,
        string $poste,
        array $wordsDescriptif,
        array $hobbies,
        string $email,
        array $langues,
        ?string $image
    ){
        $this->description = $description;
        $this->job = $job;
        $this->mobilite = $mobilite;
        $this->image = $image;
        $this->poste = $poste;
        $this->wordsDescriptif = $wordsDescriptif;
        $this->hobbies = $hobbies;
        $this->email = $email;
        $this->langues = $langues;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @return string
     */
    public function getMobilite(): string
    {
        return $this->mobilite;
    }

    /**
     * @return string
     */
    public function getPoste(): string
    {
        return $this->poste;
    }

    /**
     * @return array
     */
    public function getWordsDescriptif(): array
    {
        return $this->wordsDescriptif;
    }

    /**
     * @return array
     */
    public function getHobbies(): array
    {
        return $this->hobbies;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return array
     */
    public function getLangues(): array
    {
        return $this->langues;
    }

    public function getAge()
    {
        $dateNaissance = new \DateTime('1993-01-31');
        $now = new \DateTime('now');
        $age = $dateNaissance->diff($now);

        return $age->format('%y');
    }

}