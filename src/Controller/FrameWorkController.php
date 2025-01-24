<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrameWorkController extends AbstractController
{
    #[Route('/frame/work', name: 'app_frame_work')]
    public function index(): Response
    {
        return $this->render('frame_work/index.html.twig', [
            'controller_name' => 'FrameWorkController',
        ]);
    }
}
