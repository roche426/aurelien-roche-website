<?php

namespace App\Domain\Provider;

use App\Domain\Entity\Resume;
use App\Infrastructure\Repository\Resume\PresentationRepository;
use App\Infrastructure\Repository\Resume\SkillsRepository;
use App\Infrastructure\Repository\Resume\ExperiencesRepository;

class ResumeProvider
{
    private $experiencesRepository;
    private $skillsRepository;
    private $presentationRepository;

    public function __construct(
        ExperiencesRepository $experiencesRepository,
        SkillsRepository $skillsRepository,
        PresentationRepository $presentationRepository
    )
    {
        $this->experiencesRepository = $experiencesRepository;
        $this->skillsRepository = $skillsRepository;
        $this->presentationRepository = $presentationRepository;
    }

    public function getResume()
    {
        $presentations = $this->presentationRepository->findAll();
        return new Resume(
            $this->experiencesRepository->findAll(),
            $this->skillsRepository->findAll(),
            array_shift($presentations)
        );
    }
}