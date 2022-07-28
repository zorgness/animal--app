<?php

namespace App\Controller;

use App\Entity\Family;
use App\Repository\FamilyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FamilyController extends AbstractController
{
    #[Route('/families', name: 'families')]
    public function index(FamilyRepository $repository): Response
    {
        $families = $repository->findAll();
        return $this->render('family/index.html.twig', [
            'controller_name' => 'FamilyController',
            'families' => $families
        ]);
    }
}
