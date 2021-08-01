<?php


namespace App\Infrastructure\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="experience")
 * */
class Experience
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
    private $job;

    /**
     * @ORM\Column(type="string", length=24)
     */
    private $company;

    /**
     * @ORM\Column(type="date")
     */
    private $dateBegin;

    /**
     * @ORM\Column(type="date")
     */
    private $dateEnd;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $technologies;

    public function getId(): int
    {
        return $this->id;
    }

    public function getJob(): string
    {
        return $this->job;
    }

    public function getCompany(): string
    {
        return $this->company;
    }

    public function getDateBegin(): DateTime
    {
        return $this->dateBegin;
    }

    public function getDateEnd(): ?DateTime
    {
        return $this->dateEnd;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getTechnologies(): string
    {
        return $this->technologies;
    }

}
