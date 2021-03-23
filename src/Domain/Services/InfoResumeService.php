<?php

namespace App\Domain\Services;

use App\Domain\ValueObjet\Presentation;
use App\Domain\ValueObjet\Resume;
use App\Domain\ValueObjet\Skill;
use App\Infrastructure\Interfaces\InfoResumeRepository;
use App\Domain\Interfaces\InfoResumeService as InfoResumeServiceInterface;

class InfoResumeService implements InfoResumeServiceInterface
{
    /** @var InfoResumeRepository */
    private $infoResumeRepository;

    public function __construct(InfoResumeRepository $infoResumeRepository)
    {
        $this->infoResumeRepository = $infoResumeRepository;
    }

    /**
     * @return Resume[]
     */
    public function getResumes(): array
    {
        $resumes = [];
        foreach ($this->infoResumeRepository->findResumes() as $resume) {
            $resumes[] = new Resume(
                $resume['poste'],
                $resume['entreprise'],
                $resume['dateDebut'],
                $resume['dateFin'],
                $resume['descriptif'],
                $resume['environnement']
            );
        }
        return $resumes;
    }

    /**
     * @return Skill[]
     */
    public function getSkills(): array
    {
        $skills = [];
        foreach ($this->infoResumeRepository->findSkills() as $skill) {
            $skills[] = new Skill(
                $skill['techno'],
                $skill['level']
            );
        }
        return $skills;
    }

    /**
     * @return Presentation
     */
    public function getPresentation(): Presentation
    {
        $presentation = $this->infoResumeRepository->findPresentation();

        return new Presentation(
            $presentation['description'],
            $presentation['job'],
            $presentation['mobilite'],
            $presentation['poste'],
            $presentation['wordsDescriptif'],
            $presentation['hobbies'],
            $presentation['email'],
            $presentation['langues'],
            $presentation['image']
        );
    }
}