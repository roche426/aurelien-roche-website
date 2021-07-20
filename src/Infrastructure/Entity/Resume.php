<?php


namespace App\Infrastructure\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Infrastructure\Repository\ResumeRepository;

/**
 * @ORM\Entity()
 * @ORM\Table(name="resume")
 * */
class Resume
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
    private $experience;

    /**
     * @ORM\Column(type="text")
     */
    private $technologies;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJob()
    {
        return $this->job;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getDateBegin()
    {
        return $this->dateBegin;
    }

    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function getTechnologies()
    {
        return $this->technologies;
    }

}
