<?php

namespace App\Controller;

use App\Entity\Car;
use App\Entity\Episode;
use App\Entity\Plate;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class HomeController extends AbstractController
{
    private EntityManagerInterface $em;
    private ValidatorInterface $validator;


    public function __construct(EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->em = $em;
        $this->validator = $validator;

    }
    #[Route('/api', name: 'home_api', methods: ['GET'])]
    public function api(): Response
    {
        $plates = $this->em->getRepository(Plate::class)->findAll();
        $episodes = $this->em->getRepository(Episode::class)->findAll();
        $cars = $this->em->getRepository(Car::class)->findAll();

        if(!$plates || !$episodes || !$cars)
        {
            return $this->json(['success' => false], 400);
        }
        $data = [
            'success' => true,
            'plates' => $plates,
            'episodes' => $episodes,
            'cars' => $cars,
        ];

        return $this->json($data);

    }
    #[Route('/home', name: 'app_home')]
    public function index(Request $request): Response
    {
        return $this->render('home/index.html.twig');
    }
}
