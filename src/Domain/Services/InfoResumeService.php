<?php

namespace App\Domain\Services;

use App\Domain\Entity\Resume;
use App\Domain\Provider\ResumeProvider;

class InfoResumeService
{
    private $resumeProvider;

    public function __construct(ResumeProvider $resumeProvider)
    {
        $this->resumeProvider = $resumeProvider;
    }

    public function getResumes(): Resume
    {
        return $this->resumeProvider->getResume();
    }
}