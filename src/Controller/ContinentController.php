<?php

namespace App\Controller;

use App\Entity\Continent;
use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    #[Route('/continents', name: 'continents')]
    public function index(ContinentRepository $repository): Response
    {
        $continents = $repository->findAll();
        return $this->render('continent/index.html.twig', [
            'controller_name' => 'ContinentController',
            'continents' => $continents
        ]);
    }
    #[Route('/continents/{id}', name: 'show_continent')]
    public function show(Continent $continent): Response
    {

        return $this->render('continent/show.html.twig', [
            'controller_name' => 'ContinentController',
            'continent' => $continent
        ]);
    }
}
