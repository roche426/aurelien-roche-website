<?php

namespace App\Application\Services;

use App\Domain\Services\InfoResumeService;

class ResumeService
{
    private $infoResumeService;

    public function __construct(InfoResumeService $infoResumeService)
    {
        $this->infoResumeService = $infoResumeService;
    }

    public function getParamsHomePageIndex(): array
    {
        return [
            'resume' => $this->infoResumeService->getResumes(),
        ];
    }

}