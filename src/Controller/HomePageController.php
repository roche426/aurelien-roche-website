<?php

namespace App\Controller;

use App\Application\Services\FrontService;
use App\Infrastructure\Entity\Resume;
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
        $product = $this->getDoctrine()
            ->getRepository(Resume::class)
            ->findAll();

        dump($product);die;
        return $this->render('Front/homePage.html.twig', $this->frontService->getParamsHomePageIndex());
    }
}