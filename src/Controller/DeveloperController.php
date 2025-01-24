<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeveloperController extends AbstractController
{
    #[Route('/developer', name: 'app_developer')]
    public function index(): Response
    {
        return $this->render('developer/index.html.twig', [
            'controller_name' => 'DeveloperController',
        ]);
    }
    #[Route('/developer/details', name: 'app_developer_details')]
    public function show(): Response
    {
        return $this->render('developer/developer_details.html.twig', [
            'controller_name' => 'DeveloperController',
        ]);
    }
}
