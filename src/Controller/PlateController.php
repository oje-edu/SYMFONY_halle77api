<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Plate;
use App\Form\PlateType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class PlateController extends AbstractController
{
    private EntityManagerInterface $em;
    private ValidatorInterface $validator;


    public function __construct(EntityManagerInterface $em, ValidatorInterface $validator)
    {
        $this->em = $em;
        $this->validator = $validator;

    }
    #[Route('/api/plates', name: 'plate_api', methods: ['GET'])]
    public function api(): Response
    {
        $plates = $this->em->getRepository(Plate::class)->findAll();

        if(!$plates) {
            return $this->json(['success' => false], 400);
        }

        $data = [
            'success' => true,
            'plates' => $plates,
        ];

        return $this->json($data);
    }

    #[Route('/plates/list', name: 'plate_list')]
    #[IsGranted('ROLE_ADMIN')]
    public function list(): Response
    {
        return $this->render('plate/list.html.twig', [

            'plates' => $this->em->getRepository(Plate::class)->findAll(),
        ]);
    }

    #[Route('/plate/add', name: 'plate_add')]
    #[IsGranted('ROLE_ADMIN')]
    public function add(Request $request): Response
    {
        $plate = new Plate();
        $form = $this->createForm(PlateType::class, $plate);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $plate =$form->getData();

            $error = $this->validator->validate($plate);

            if(count($error) > 0) {
                $errorMessages = [];
                /** @var ConstraintViolation $violation */
                foreach ($error as $violation) {
                    $errorMessages[] = $violation->getPropertyPath() . ": " . $violation->getMessage();
                }
                return $this->json(['success' => false, 'errors' => $errorMessages],  400);
            }

            $this->em->persist($plate);

            $this->em->flush();

            return $this->redirectToRoute('plate_list');
        }

        return $this->render('plate/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/plate/edit/{id}', name: 'plate_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit($id, Request $request): Response
    {
        $plate = $this->em->getRepository(Plate::class)->find($id);
        $form = $this->createForm(PlateType::class, $plate);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $plate->setKz($form->get('kz')->getData())
                ->setName($form->get('name')->getData())
                ->setLat($form->get('lat')->getData())
                ->setLng($form->get('lng')->getData());

            $this->em->flush();

            return $this->redirectToRoute('plate_list');
        }
        return $this->render('plate/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/plate/delete/{id}', name: 'plate_delete')]
    #[IsGranted('ROLE_ADMIN')]
    public function delete($id): Response
    {
        $plate = $this->em->getRepository(Plate::class)->find($id);
        $this->em->remove($plate);
        $this->em->flush();

        return $this->redirectToRoute('plate_list');
    }

    #[Route('/plates/search', name: 'plate_search')]
    public function search(Request $request): Response
    {
        $plates = $this->em->getRepository(Plate::class)->findAll();

        if($request->isMethod('POST'))
        {
            $kz = $request->get('kz');
            $plates = $this->em->getRepository(Plate::class)->findBy(['kz' => $kz]);
        }
        return $this->render('plate/search.html.twig', [
            'plates' => $plates,
        ]);
    }
}
