<?php

namespace App\Controller;

use App\Application\Services\FrontService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    /** @var FrontService */
    private $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        return $this->render('Front/homePage.html.twig', $this->frontService->getParamsHomePageIndex());
    }
}