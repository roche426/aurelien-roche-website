<?php

namespace App\Infrastructure\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="skill")
 * */
class Skill
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
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $knowledgePercent;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isMainKnowledge;

    /**
     * @ORM\Column(type="string")
     */
    private $category;


    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getKnowledgePercent(): int
    {
        return $this->knowledgePercent;
    }

    public function getIsMainKnowledge(): bool
    {
        return $this->isMainKnowledge;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}