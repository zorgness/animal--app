<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\Validator\Constraints\All;
use Doctrine\Persistence\ManagerRegistry;

class AnimalController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}

    #[Route('/', name: 'animals')]
    public function index(AnimalRepository $repository): Response
    {
        $animals = $repository->findAll();
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animals' => $animals
        ]);
    }
    // #[Route('/animals/{id}', name: 'show_animal')]
    // public function show(AnimalRepository $repository, $id): Response
    // {
    //     $animal = $repository->find($id);
    //     return $this->render('animal/show.html.twig', [
    //         'controller_name' => 'AnimalController',
    //         'animal' => $animal
    //     ]);
    // }
    #[Route('/animals/{id}', name: 'show_animal')]
    public function show(Animal $animal): Response
    {

        return $this->render('animal/show.html.twig', [
            'controller_name' => 'AnimalController',
            'animal' => $animal
        ]);
    }
}
