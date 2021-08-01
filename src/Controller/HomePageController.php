<?php

namespace App\Controller;

use App\Application\Services\ResumeService;
use App\Infrastructure\Entity\Resume;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    private $resumeService;

    public function __construct(ResumeService $resumeService)
    {
        $this->resumeService = $resumeService;
    }

    public function index()
    {
        return $this->render('Front/homePage.html.twig', $this->resumeService->getParamsHomePageIndex());
    }
}