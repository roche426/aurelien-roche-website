<?php

namespace App\Domain\Interfaces;

use App\Domain\ValueObjet\Presentation;
use App\Domain\ValueObjet\Resume;
use App\Domain\ValueObjet\Skill;

interface InfoResumeService
{
    /**
     * @return Resume[]
     */
    public function getResumes(): array;
    /**
     * @return Skill[]
     */
    public function getSkills(): array;

    /**
     * @return Presentation
     */
    public function getPresentation(): Presentation;


}