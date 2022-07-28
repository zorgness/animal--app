<?php

namespace App\Controller;

use App\Entity\Person;
use App\Repository\PersonRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PersonController extends AbstractController
{
    #[Route('/persons', name: 'persons')]
    public function index(PersonRepository $repository): Response
    {
        $persons = $repository->findAll();
        return $this->render('person/index.html.twig', [
            'controller_name' => 'PersonController',
            "persons" => $persons
        ]);
    }
    #[Route('/persons/{id}', name: 'show_person')]
    public function show(Person $person): Response
    {

        return $this->render('person/show.html.twig', [
            'controller_name' => 'PersonController',
            "person" => $person
        ]);
    }
}
