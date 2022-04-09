<?php


namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CarController extends AbstractController
{
    private EntityManagerInterface $em;
    private ValidatorInterface $validator;


    public function __construct(EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->em = $em;
        $this->validator = $validator;

    }
    #[Route('/api/cars', name: 'car_api', methods: ['GET'])]
    public function api(): Response
    {
        $cars = $this->em->getRepository(Car::class)->findAll();

        if(!$cars) {
            return $this->json(['success' => false], 400);
        }

        $data = [
            'success' => true,
            'cars' => $cars,
        ];

        return $this->json($data);
    }

    #[Route('/cars/list', name: 'car_list')]
    #[IsGranted('ROLE_ADMIN')]
    public function index(): Response
    {
        return $this->render('car/list.html.twig', [
            'cars' => $this->em->getRepository(Car::class)->findBy([], ['episode' => 'DESC', 'carNr' => 'ASC']),
        ]);
    }

    #[Route('/car/add', name: 'car_add')]
    #[IsGranted('ROLE_ADMIN')]
    public function add(Request $request): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $car = $form->getData();

            $error = $this->validator->validate($car);

            if(count($error) > 0) {
                $errorMessages = [];
                /** @var ConstraintViolation $violation */
                foreach ($error as $violation) {
                    $errorMessages[] = $violation->getPropertyPath() . ": " . $violation->getMessage();
                }
                return $this->json(['success' => false, 'errors' => $errorMessages],  400);
            }

            $this->em->persist($car);

            $this->em->flush();

            return $this->redirectToRoute('car_list');
        }

        return $this->render('car/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/car/edit/{id}', name: 'car_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit($id, Request $request): Response
    {
        $car = $this->em->getRepository(Car::class)->find($id);
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $car
                ->setEpisodeNr($form->get('episodeNr')->getData())
                ->setCarNr($form->get('carNr')->getData())
                ->setBrand($form->get('brand')->getData())
                ->setType($form->get('type')->getData())
                ->setCcm($form->get('ccm')->getData())
                ->setHp($form->get('hp')->getData())
                ->setKm($form->get('km')->getData())
                ->setYear($form->get('year')->getData())
                ->setPs1($form->get('ps1')->getData())
                ->setPs2($form->get('ps2')->getData())
                ->setComment($form->get('comment')->getData());

            $this->em->flush();

            return $this->redirectToRoute('car_list');
        }

        return $this->render('car/edit.html.twig', [
           'form' => $form->createView(),
        ]);
    }

    #[Route('/car/delete/{id}', name: 'car_delete')]
    #[IsGranted('ROLE_ADMIN')]
    public function delete($id): Response
    {
        $car = $this->em->getRepository(Car::class)->find($id);
        $this->em->remove($car);
        $this->em->flush();

        return $this->redirectToRoute('car_list');
    }
}
