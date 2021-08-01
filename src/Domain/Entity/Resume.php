<?php

namespace App\Domain\Entity;

use App\Infrastructure\Entity\Experience;
use App\Infrastructure\Entity\Presentation;
use App\Infrastructure\Entity\Skill;

class Resume
{
    private $experiences;
    private $skills;
    private $presentation;

    public function __construct(array $experiences, array $skills, Presentation $presentation)
    {
        $this->experiences = $experiences;
        $this->skills = $skills;
        $this->presentation = $presentation;
    }

    /**
     * @return Experience[]
     */
    public function getExperiences(): array
    {
        return $this->experiences;
    }

    /**
     * @return Skill[]
     */
    public function getSkills(): array
    {
        return $this->skills;
    }

    public function getPresentation(): Presentation
    {
        return $this->presentation;
    }


}