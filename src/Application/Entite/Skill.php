<?php

namespace App\Application\Entite;

class Skill
{
    /** @var string */
    private $techno;

    /** @var int */
    private $level;

    public function __construct(string $techno, int $level)
    {
        $this->techno = $techno;
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getTechno(): string
    {
        return $this->techno;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }
}