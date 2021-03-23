<?php

namespace App\Application\Services;

use App\Application\Entite\Presentation;
use App\Application\Entite\Resume;
use App\Application\Entite\Skill;
use App\Domain\Interfaces\InfoResumeService;


class FrontService
{
    /** @var InfoResumeService */
    private $infoResumeService;

    public function __construct(InfoResumeService $infoResumeService)
    {
        $this->infoResumeService = $infoResumeService;
    }

    public function getParamsHomePageIndex(): array
    {
        return [
            'presentation' => $this->getPresentation(),
            'resumes' => $this->getResumes(),
            'skills' => $this->getSkills()
        ];
    }


    /**
     * @return Resume[]
     */
    private function getResumes(): array
    {
        $resumes = [];
        foreach ($this->infoResumeService->getResumes() as $resume) {
            $resumes[] = new Resume(
                $resume->getPoste(),
                $resume->getEntreprise(),
                $resume->getDateDebut(),
                $resume->getDateFin(),
                $resume->getDescriptifs(),
                $resume->getEnvironnement()
            );
        }

        usort($resumes, function (Resume $resumeA, Resume $resumeB) {
            if (($resumeA->getDateDebut() > $resumeB->getDateDebut())) {
                return -1;
            }
            return 1;
        });

        return $resumes;
    }

    /**
     * @return Skill[]
     */
    private function getSkills(): array
    {
        $skills = [];
        foreach ($this->infoResumeService->getSkills() as $skill) {
            $skills[] = new Skill(
                $skill->getTechno(),
                $skill->getLevel()
            );
        }

        usort($skills, function (Skill $skillA, Skill$skillB) {
            if ($skillA->getLevel() > $skillB->getLevel()) {
                return -1;
            }
            return 1;
        });

        return $skills;
    }

    /**
     * @return Presentation
     */
    public function getPresentation(): Presentation
    {
        $presentation = $this->infoResumeService->getPresentation();

        return new Presentation(
            $presentation->getDescription(),
            $presentation->getJob(),
            $presentation->getMobilite(),
            $presentation->getPoste(),
            $presentation->getWordsDescriptif(),
            $presentation->getHobbies(),
            $presentation->getEmail(),
            $presentation->getLangues(),
            $presentation->getImage()

        );
    }
}